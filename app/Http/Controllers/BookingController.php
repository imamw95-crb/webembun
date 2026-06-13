<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Services\ExternalApiService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function create(Request $request, $slug)
    {
        $room = Room::where('slug', $slug)->available()->firstOrFail();

        // Generate math captcha
        $num1 = rand(1, 9);
        $num2 = rand(1, 9);
        session()->put('booking_captcha', $num1 + $num2);

        return view('bookings.create', compact('room', 'num1', 'num2'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'room_id' => 'required|exists:rooms,id',
            'guest_name' => 'required|string|max:255',
            'guest_email' => 'required|email|max:255',
            'guest_phone' => 'nullable|string|max:20',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'guests' => 'required|integer|min:1|max:10',
            'notes' => 'nullable|string|max:1000',
            'captcha' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Verify math captcha
        $expected = session()->pull('booking_captcha');
        if ($expected === null || (int) $request->captcha !== $expected) {
            return back()->withErrors(['captcha' => 'Jawaban verifikasi salah. Silakan coba lagi.'])->withInput();
        }

        $room = Room::findOrFail($request->room_id);
        $checkIn = Carbon::parse($request->check_in);
        $checkOut = Carbon::parse($request->check_out);
        $nights = $checkIn->diffInDays($checkOut);
        $totalPrice = $room->price_per_night * $nights;

        // Check for overlapping bookings
        $overlapping = Booking::where('room_id', $room->id)
            ->whereIn('status', ['pending', 'confirmed'])
            ->where(function ($q) use ($request) {
                $q->whereBetween('check_in', [$request->check_in, $request->check_out])
                    ->orWhereBetween('check_out', [$request->check_in, $request->check_out])
                    ->orWhere(function ($q2) use ($request) {
                        $q2->where('check_in', '<=', $request->check_in)
                            ->where('check_out', '>=', $request->check_out);
                    });
            })
            ->exists();

        if ($overlapping) {
            return back()->with('error', 'Maaf, kamar sudah dibooking pada tanggal tersebut. Silakan pilih tanggal lain.')->withInput();
        }

        $booking = Booking::create([
            'user_id' => auth()->id(),
            'room_id' => $room->id,
            'guest_name' => $request->guest_name,
            'guest_email' => $request->guest_email,
            'guest_phone' => $request->guest_phone,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'guests' => $request->guests,
            'total_price' => $totalPrice,
            'status' => 'pending',
            'notes' => $request->notes,
        ]);

        // Sync to external API
        $this->syncToExternalApi($booking);

        return redirect()->route('booking.success', $booking->id)
            ->with('success', 'Booking berhasil! Silakan tunggu konfirmasi dari kami.');
    }

    /**
     * Check room availability for given dates (AJAX).
     */
    public function checkAvailability(Request $request, Room $room)
    {
        $request->validate([
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
        ]);

        $overlapping = Booking::where('room_id', $room->id)
            ->whereIn('status', ['pending', 'confirmed'])
            ->where(function ($q) use ($request) {
                $q->whereBetween('check_in', [$request->check_in, $request->check_out])
                    ->orWhereBetween('check_out', [$request->check_in, $request->check_out])
                    ->orWhere(function ($q2) use ($request) {
                        $q2->where('check_in', '<=', $request->check_in)
                            ->where('check_out', '>=', $request->check_out);
                    });
            })
            ->exists();

        $checkIn = Carbon::parse($request->check_in);
        $checkOut = Carbon::parse($request->check_out);
        $nights = $checkIn->diffInDays($checkOut);
        $totalPrice = $room->price_per_night * $nights;

        return response()->json([
            'available' => ! $overlapping,
            'nights' => $nights,
            'total_price' => $totalPrice,
            'price_per_night' => $room->price_per_night,
            'message' => $overlapping
                ? 'Maaf, kamar sudah dibooking pada tanggal tersebut.'
                : 'Kamar tersedia untuk tanggal tersebut!',
        ]);
    }

    /**
     * Sync booking data to the external API.
     */
    protected function syncToExternalApi(Booking $booking): void
    {
        try {
            $api = app(ExternalApiService::class);

            // Map local room to external room_id
            $externalRoomId = $api->mapToExternalRoomId($booking->room->name);

            if ($externalRoomId === null) {
                Log::warning('Could not map local room to external room ID, skipping sync', [
                    'booking_id' => $booking->id,
                    'local_room' => $booking->room->name,
                ]);

                return;
            }

            $payload = [
                'guest_name' => $booking->guest_name,
                'guest_email' => $booking->guest_email,
                'guest_phone' => $booking->guest_phone,
                'room_id' => $externalRoomId,
                'check_in' => $booking->check_in->format('Y-m-d'),
                'check_out' => $booking->check_out->format('Y-m-d'),
                'guests' => $booking->guests,
                'total_price' => (int) $booking->total_price,
                'notes' => $booking->notes,
            ];

            $result = $api->createReservation($payload);

            if ($result !== null) {
                Log::info('Booking successfully synced to external API', [
                    'local_booking_id' => $booking->id,
                    'external_room_id' => $externalRoomId,
                    'api_response' => $result,
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Failed to sync booking to external API', [
                'booking_id' => $booking->id,
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function success(Booking $booking)
    {
        return view('bookings.success', compact('booking'));
    }
}

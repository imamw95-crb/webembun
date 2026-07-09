<?php

namespace Tests\Feature;

use App\Models\Booking;
use App\Models\Room;
use App\Services\ExternalApiService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookingTest extends TestCase
{
    use RefreshDatabase;

    protected function mockExternalApiAvailable(): void
    {
        $mock = $this->createMock(ExternalApiService::class);
        $mock->method('checkExternalAvailability')->willReturn(true);
        $mock->method('getExternalRoomId')->willReturn(null);
        $this->app->instance(ExternalApiService::class, $mock);
    }

    public function test_booking_create_page_returns_successful_response(): void
    {
        $this->mockExternalApiAvailable();
        $room = Room::factory()->available()->create();

        $response = $this->get(route('booking.create', $room->slug));

        $response->assertStatus(200);
        $response->assertSee($room->name);
        $response->assertSee('captcha');
    }

    public function test_guest_can_create_booking(): void
    {
        $this->mockExternalApiAvailable();
        $room = Room::factory()->available()->create([
            'price_per_night' => 1000000,
        ]);

        $sessionCaptcha = 7;
        session()->put('booking_captcha', $sessionCaptcha);

        $response = $this->post(route('booking.store'), [
            'room_id' => $room->id,
            'guest_name' => 'John Doe',
            'guest_email' => 'john@example.com',
            'guest_phone' => '08123456789',
            'check_in' => now()->addDay()->format('Y-m-d'),
            'check_out' => now()->addDays(3)->format('Y-m-d'),
            'guests' => 2,
            'notes' => 'Test booking',
            'captcha' => $sessionCaptcha,
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('bookings', [
            'guest_name' => 'John Doe',
            'guest_email' => 'john@example.com',
            'room_id' => $room->id,
            'status' => 'pending',
        ]);
    }

    public function test_booking_fails_with_wrong_captcha(): void
    {
        $this->mockExternalApiAvailable();
        $room = Room::factory()->available()->create();
        session()->put('booking_captcha', 10);

        $response = $this->post(route('booking.store'), [
            'room_id' => $room->id,
            'guest_name' => 'John Doe',
            'guest_email' => 'john@example.com',
            'check_in' => now()->addDay()->format('Y-m-d'),
            'check_out' => now()->addDays(2)->format('Y-m-d'),
            'guests' => 2,
            'captcha' => 5, // wrong captcha
        ]);

        $response->assertSessionHasErrors('captcha');
        $this->assertDatabaseCount('bookings', 0);
    }

    public function test_booking_fails_with_overlapping_dates(): void
    {
        $this->mockExternalApiAvailable();
        $room = Room::factory()->available()->create([
            'price_per_night' => 1000000,
        ]);

        // Create an existing booking
        Booking::factory()->confirmed()->create([
            'room_id' => $room->id,
            'check_in' => now()->addDays(2)->format('Y-m-d'),
            'check_out' => now()->addDays(5)->format('Y-m-d'),
        ]);

        session()->put('booking_captcha', 8);

        // Try to book overlapping dates
        $response = $this->post(route('booking.store'), [
            'room_id' => $room->id,
            'guest_name' => 'Jane Doe',
            'guest_email' => 'jane@example.com',
            'check_in' => now()->addDays(3)->format('Y-m-d'),
            'check_out' => now()->addDays(4)->format('Y-m-d'),
            'guests' => 2,
            'captcha' => 8,
        ]);

        $response->assertSessionHas('error');
    }

    public function test_booking_validation_fails_with_missing_fields(): void
    {
        $this->mockExternalApiAvailable();
        $response = $this->post(route('booking.store'), []);

        $response->assertSessionHasErrors([
            'room_id', 'guest_name', 'guest_email',
            'check_in', 'check_out', 'guests', 'captcha',
        ]);
    }

    public function test_check_availability_returns_json(): void
    {
        $this->mockExternalApiAvailable();
        $room = Room::factory()->available()->create([
            'price_per_night' => 1000000,
        ]);

        $response = $this->get(route('booking.check-availability', $room).'?check_in='.now()->addDay()->format('Y-m-d').'&check_out='.now()->addDays(2)->format('Y-m-d'));

        $response->assertJsonStructure([
            'available', 'nights', 'total_price', 'price_per_night', 'message',
        ]);
        $response->assertJson(['available' => true]);
    }

    public function test_check_availability_returns_unavailable(): void
    {
        $this->mockExternalApiAvailable();
        $room = Room::factory()->available()->create();

        Booking::factory()->confirmed()->create([
            'room_id' => $room->id,
            'check_in' => now()->addDay()->format('Y-m-d'),
            'check_out' => now()->addDays(3)->format('Y-m-d'),
        ]);

        $response = $this->get(route('booking.check-availability', $room).'?check_in='.now()->addDay()->format('Y-m-d').'&check_out='.now()->addDays(3)->format('Y-m-d'));

        $response->assertJson(['available' => false]);
    }

    public function test_success_page_returns_successful_response(): void
    {
        $this->mockExternalApiAvailable();
        $booking = Booking::factory()->create();

        $response = $this->get(route('booking.success', $booking));

        $response->assertStatus(200);
        $response->assertSee($booking->guest_name);
    }
}

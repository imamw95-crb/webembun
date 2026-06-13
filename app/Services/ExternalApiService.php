<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ExternalApiService
{
    protected string $baseUrl;

    protected string $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.embun_api.base_url');
        $this->apiKey = config('services.embun_api.api_key');
    }

    /**
     * Get headers required for API requests.
     */
    protected function headers(): array
    {
        return [
            'X-API-Key' => $this->apiKey,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    /**
     * Get list of reservations from external API.
     *
     * @param  array  $params  Query parameters (status, per_page, etc.)
     */
    public function getReservations(array $params = []): ?array
    {
        try {
            $response = Http::withHeaders($this->headers())
                ->get("{$this->baseUrl}/reservations", $params);

            if ($response->successful()) {
                $json = $response->json();

                // Handle paginated response: { success: true, data: { data: [...] } }
                if (isset($json['data']['data'])) {
                    return $json['data']['data'];
                }

                // Handle direct array: { data: [...] }
                if (isset($json['data']) && is_array($json['data'])) {
                    return $json['data'];
                }

                return $json;
            }

            Log::warning('External API: Failed to fetch reservations', [
                'status' => $response->status(),
                'body' => $response->body(),
                'params' => $params,
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error('External API: Error fetching reservations', [
                'message' => $e->getMessage(),
                'params' => $params,
            ]);

            return null;
        }
    }

    /**
     * Create a new reservation on the external API.
     *
     * @param  array  $data  Reservation data (guest_name, room_id, check_in, check_out)
     */
    public function createReservation(array $data): ?array
    {
        try {
            $response = Http::withHeaders($this->headers())
                ->post("{$this->baseUrl}/reservations", $data);

            if ($response->successful()) {
                return $response->json();
            }

            Log::warning('External API: Failed to create reservation', [
                'status' => $response->status(),
                'body' => $response->body(),
                'data' => $data,
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error('External API: Error creating reservation', [
                'message' => $e->getMessage(),
                'data' => $data,
            ]);

            return null;
        }
    }

    /**
     * Get all available rooms from the external API.
     */
    public function getRooms(): ?array
    {
        try {
            $response = Http::withHeaders($this->headers())
                ->get("{$this->baseUrl}/rooms");

            if ($response->successful()) {
                $json = $response->json();

                // Handle response: { success: true, data: [...] }
                if (isset($json['data']) && is_array($json['data'])) {
                    return $json['data'];
                }

                return $json;
            }

            Log::warning('External API: Failed to fetch rooms', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error('External API: Error fetching rooms', [
                'message' => $e->getMessage(),
            ]);

            return null;
        }
    }

    /**
     * Map our local room name to an external room_id.
     *
     * Uses the local room name to find the first available room
     * on the external API with a matching room type name.
     *
     * @param  string  $localRoomName  The local room name (e.g., "Pine Dome (Pindom)")
     */
    public function mapToExternalRoomId(string $localRoomName): ?int
    {
        $rooms = $this->getRooms();

        if ($rooms === null || empty($rooms)) {
            Log::warning('External API: No rooms available for mapping', [
                'local_room' => $localRoomName,
            ]);

            return null;
        }

        // Normalize local room name to match external room type names
        $normalized = $this->normalizeRoomName($localRoomName);

        foreach ($rooms as $room) {
            $externalType = strtolower(trim($room['room_type_name'] ?? ''));
            if ($externalType === $normalized && ($room['status'] ?? '') === 'available') {
                return (int) $room['id'];
            }
        }

        // Fallback: try partial match
        foreach ($rooms as $room) {
            $externalType = strtolower(trim($room['room_type_name'] ?? ''));
            if (str_contains($externalType, $normalized) || str_contains($normalized, $externalType)) {
                if (($room['status'] ?? '') === 'available') {
                    return (int) $room['id'];
                }
            }
        }

        // Last fallback: return any available room
        foreach ($rooms as $room) {
            if (($room['status'] ?? '') === 'available') {
                return (int) $room['id'];
            }
        }

        Log::warning('External API: No matching room found', [
            'local_room' => $localRoomName,
            'normalized' => $normalized,
        ]);

        return null;
    }

    /**
     * Normalize local room name to match external API format.
     */
    protected function normalizeRoomName(string $name): string
    {
        // Remove parenthetical content, e.g., "Pine Dome (Pindom)" -> "pine dome"
        $name = preg_replace('/\s*\(.*?\)\s*/', '', $name);
        // Also remove "type " prefix if any
        $name = preg_replace('/^tipe\s+/i', '', $name);

        return strtolower(trim($name));
    }
}

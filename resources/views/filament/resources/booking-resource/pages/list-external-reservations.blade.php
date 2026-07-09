<div class="space-y-4">
    @if(count($externalReservations) === 0)
        <div class="p-6 text-center text-gray-500">
            <svg class="w-12 h-12 mx-auto mb-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <p class="text-lg font-medium text-gray-400">No reservations from external API</p>
            <p class="text-sm text-gray-400 mt-1">Click "Refresh from API" to fetch data.</p>
        </div>
    @else
        <div class="overflow-x-auto rounded-xl border border-gray-200">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="px-4 py-3 text-left font-medium text-gray-600">ID</th>
                        <th class="px-4 py-3 text-left font-medium text-gray-600">Guest Name</th>
                        <th class="px-4 py-3 text-left font-medium text-gray-600">Room</th>
                        <th class="px-4 py-3 text-left font-medium text-gray-600">Check In</th>
                        <th class="px-4 py-3 text-left font-medium text-gray-600">Check Out</th>
                        <th class="px-4 py-3 text-left font-medium text-gray-600">Status</th>
                        <th class="px-4 py-3 text-left font-medium text-gray-600">Total</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($externalReservations as $reservation)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-3 font-medium text-gray-900">
                                #{{ $reservation['id'] ?? $reservation['reservation_id'] ?? '-' }}
                            </td>
                            <td class="px-4 py-3 text-gray-700">
                                {{ $reservation['guest_name'] ?? $reservation['name'] ?? '-' }}
                            </td>
                            <td class="px-4 py-3 text-gray-700">
                                {{ $reservation['room_name'] ?? $reservation['room_id'] ?? '-' }}
                            </td>
                            <td class="px-4 py-3 text-gray-700">
                                {{ $reservation['check_in'] ?? '-' }}
                            </td>
                            <td class="px-4 py-3 text-gray-700">
                                {{ $reservation['check_out'] ?? '-' }}
                            </td>
                            <td class="px-4 py-3">
                                @php
                                    $status = $reservation['status'] ?? 'unknown';
                                    $color = match($status) {
                                        'confirmed' => 'success',
                                        'pending' => 'warning',
                                        'cancelled' => 'danger',
                                        'completed' => 'success',
                                        default => 'gray'
                                    };
                                @endphp
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-{{ $color }}-100 text-{{ $color }}-700">
                                    {{ ucfirst($status) }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-gray-700">
                                @php
                                    $total = $reservation['total_price'] ?? $reservation['total'] ?? 0;
                                @endphp
                                Rp {{ number_format((float) $total, 0, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if(method_exists($externalReservations, 'links'))
            <div class="mt-4">
                {{ $externalReservations->links() }}
            </div>
        @endif
    @endif
</div>

@extends('layouts.app')

@section('title', 'Booking - ' . $room->name)

@section('content')
<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="scroll-reveal scroll-reveal--fade-in-up mb-8">
            <a href="{{ route('rooms.show', $room->slug) }}" class="inline-flex items-center text-sm text-gray-500 hover:text-emerald-700 transition-colors group">
                <x-heroicon-o-chevron-left class="w-4 h-4 mr-1 transition-transform duration-300 group-hover:-translate-x-1" />
                Kembali ke {{ $room->name }}
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
            <!-- Form -->
            <div class="lg:col-span-3 scroll-reveal scroll-reveal--fade-in-up">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 lg:p-8 hover:shadow-md transition-shadow duration-300">
                    <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 font-['Playfair_Display'] mb-2">Pesan Kamar</h1>
                    <p class="text-gray-500 mb-6">Isi data diri Anda untuk melakukan pemesanan</p>

                    @if(session('error'))
                    <div class="p-4 mb-6 bg-red-50 border border-red-100 rounded-xl text-red-700 text-sm">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form action="{{ route('booking.store') }}" method="POST" class="space-y-6"
                          x-data="{
                            checkIn: '{{ old('check_in', date('Y-m-d')) }}',
                            checkOut: '{{ old('check_out', date('Y-m-d', strtotime('+1 day'))) }}',
                            checking: false,
                            available: null,
                            message: '',
                            nights: 0,
                            totalPrice: 0,
                            pricePerNight: {{ $room->price_per_night }},
                            timer: null,
                            checkAvailability() {
                                if (!this.checkIn || !this.checkOut) {
                                    this.available = null;
                                    this.message = '';
                                    return;
                                }
                                if (this.checkOut <= this.checkIn) {
                                    this.available = false;
                                    this.message = 'Check-out harus setelah check-in.';
                                    return;
                                }
                                this.checking = true;
                                fetch('{{ route('booking.check-availability', $room) }}?check_in=' + this.checkIn + '&check_out=' + this.checkOut)
                                    .then(r => r.json())
                                    .then(data => {
                                        this.available = data.available;
                                        this.message = data.message;
                                        this.nights = data.nights;
                                        this.totalPrice = data.total_price;
                                        this.checking = false;
                                    })
                                    .catch(() => {
                                        this.available = null;
                                        this.message = '';
                                        this.checking = false;
                                    });
                            },
                            onDateChange() {
                                clearTimeout(this.timer);
                                this.timer = setTimeout(() => this.checkAvailability(), 400);
                            },
                            init() {
                                if (this.checkIn && this.checkOut) {
                                    this.checkAvailability();
                                }
                            }
                          }">
                        @csrf
                        <input type="hidden" name="room_id" value="{{ $room->id }}">

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" name="guest_name" value="{{ old('guest_name') }}" required
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all @error('guest_name') border-red-300 @enderror"
                                placeholder="Masukkan nama lengkap">
                            @error('guest_name') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                        </div>

                        <div class="scroll-reveal scroll-reveal--fade-in-up grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
                                <input type="email" name="guest_email" value="{{ old('guest_email') }}" required
                                    class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all @error('guest_email') border-red-300 @enderror"
                                    placeholder="email@example.com">
                                @error('guest_email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">No. Telepon</label>
                                <input type="tel" name="guest_phone" value="{{ old('guest_phone') }}"
                                    class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all @error('guest_phone') border-red-300 @enderror"
                                    placeholder="08XXXXXXXXXX">
                                @error('guest_phone') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="scroll-reveal scroll-reveal--fade-in-up grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Check-in <span class="text-red-500">*</span></label>
                                <input type="date" name="check_in" x-model="checkIn" @change="onDateChange" required min="{{ date('Y-m-d') }}" value="{{ old('check_in', date('Y-m-d')) }}"
                                    class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all @error('check_in') border-red-300 @enderror">
                                @error('check_in') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Check-out <span class="text-red-500">*</span></label>
                                <input type="date" name="check_out" x-model="checkOut" @change="onDateChange" required min="{{ date('Y-m-d', strtotime('+1 day')) }}" value="{{ old('check_out', date('Y-m-d', strtotime('+1 day'))) }}"
                                    class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all @error('check_out') border-red-300 @enderror">
                                @error('check_out') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <!-- Real-time Availability Status -->
                        <div class="scroll-reveal scroll-reveal--fade-in-up" x-show="checkIn && checkOut" x-cloak>
                            <div x-show="checking" class="flex items-center space-x-2 text-sm text-gray-500">
                                <svg class="animate-spin h-4 w-4 text-emerald-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span>Memeriksa ketersediaan...</span>
                            </div>
                            <template x-if="!checking && available !== null">
                                <div>
                                    <!-- Available -->
                                    <div x-show="available"
                                         class="p-4 bg-emerald-50 border border-emerald-100 rounded-xl">
                                        <div class="flex items-center space-x-2 text-emerald-700 font-medium">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <span x-text="message"></span>
                                        </div>
                                        <div class="mt-2 text-sm text-emerald-600">
                                            <span x-text="nights + ' malam'"></span>
                                            &middot;
                                            <span class="font-semibold" x-text="'Rp ' + new Intl.NumberFormat('id-ID').format(totalPrice)"></span>
                                        </div>
                                    </div>
                                    <!-- Unavailable -->
                                    <div x-show="!available"
                                         class="p-4 bg-red-50 border border-red-100 rounded-xl">
                                        <div class="flex items-center space-x-2 text-red-700 font-medium">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                                            </svg>
                                            <span x-text="message"></span>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <div class="scroll-reveal scroll-reveal--fade-in-up">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jumlah Tamu <span class="text-red-500">*</span></label>
                            <select name="guests" required
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all">
                                @for($i = 1; $i <= min($room->capacity, 10); $i++)
                                    <option value="{{ $i }}" {{ old('guests') == $i ? 'selected' : '' }}>{{ $i }} Tamu</option>
                                @endfor
                            </select>
                            @error('guests') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                        </div>

                        <div class="scroll-reveal scroll-reveal--fade-in-up">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Catatan (opsional)</label>
                            <textarea name="notes" rows="3"
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all"
                                placeholder="Permintaan khusus...">{{ old('notes') }}</textarea>
                        </div>

                        <!-- Math Captcha -->
                        <div class="scroll-reveal scroll-reveal--fade-in-up p-4 bg-gray-50 border border-gray-100 rounded-xl">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Verifikasi <span class="text-red-500">*</span>
                            </label>
                            <p class="text-sm text-gray-500 mb-3">Jawab soal berikut untuk mengirim pemesanan:</p>
                            <div class="flex items-center space-x-3">
                                <span class="text-lg font-semibold text-gray-800 px-4 py-2 bg-white border border-gray-200 rounded-lg select-none">
                                    {{ $num1 }} + {{ $num2 }} = ?
                                </span>
                                <input type="number" name="captcha" value="{{ old('captcha') }}" required
                                    class="w-24 px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all text-center @error('captcha') border-red-300 @enderror"
                                    placeholder="?">
                            </div>
                            @error('captcha') <p class="mt-2 text-sm text-red-500">{{ $message }}</p> @enderror
                        </div>

                        <div class="scroll-reveal scroll-reveal--fade-in-up">
                            <button type="submit"
                                :disabled="available === false"
                                :class="available === false ? 'opacity-50 cursor-not-allowed' : 'hover:from-emerald-700 hover:to-teal-600 hover:shadow-xl'"
                                class="btn-press w-full px-6 py-3 bg-gradient-to-r from-emerald-600 to-teal-500 text-white rounded-xl transition-all duration-300 font-semibold shadow-lg">
                                <span x-show="available !== false">Konfirmasi Pemesanan</span>
                                <span x-show="available === false">Kamar Tidak Tersedia</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Room Summary -->
            <div class="lg:col-span-2 scroll-reveal scroll-reveal--fade-in-right">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 lg:p-8 sticky top-24 hover:shadow-md transition-shadow duration-300">
                    <h3 class="font-semibold text-gray-900 mb-4">Ringkasan Pemesanan</h3>
                    
                    @if($room->featured_image)
                        <img src="{{ asset('storage/' . $room->featured_image) }}" alt="{{ $room->name }}" class="w-full h-40 object-cover rounded-xl mb-4">
                    @endif
                    
                    <h4 class="text-lg font-bold text-gray-900 mb-2">{{ $room->name }}</h4>
                    
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-500">Harga per malam</span>
                            <span class="font-medium">Rp {{ number_format($room->price_per_night, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-500">Termasuk</span>
                            <span class="font-medium text-emerald-600">Sarapan</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-500">Kapasitas</span>
                            <span class="font-medium">{{ $room->capacity }} Tamu</span>
                        </div>
                    </div>

                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <div class="flex items-center space-x-2 text-sm text-gray-500">
                            <x-heroicon-o-information-circle class="w-4 h-4 text-emerald-500" />
                            <span>Pemesanan akan dikonfirmasi oleh tim kami</span>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-gray-500 mt-2">
                            <x-heroicon-o-check-circle class="w-4 h-4 text-emerald-500" />
                            <span>Data Anda aman dan terenkripsi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

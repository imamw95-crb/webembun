<!-- Rooms Section -->
<section class="py-16 lg:py-24 bg-gray-50" id="rooms" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center max-w-2xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-4">Unit Glamping</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Pilihan Glamping Premium</h2>
            <p class="text-gray-500 leading-relaxed">Tersedia 3 tipe glamping dengan harga mulai Rp650.000 – Rp1.500.000/malam, termasuk sarapan</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" data-stagger="150">
            @forelse($rooms as $room)
            <div class="scroll-reveal scroll-reveal--fade-in-up card-lift group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="img-zoom relative h-56 lg:h-64 overflow-hidden">
                    @if(!empty($room['featured_image']))
                        <img src="{{ asset('storage/' . $room['featured_image']) }}" alt="{{ $room['name'] }}" class="w-full h-full object-cover" loading="lazy">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-emerald-200 to-teal-100 flex items-center justify-center">
                            <x-heroicon-o-building-office class="w-16 h-16 text-emerald-400" />
                        </div>
                    @endif
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-semibold text-emerald-700">
                        Rp {{ number_format($room['price_per_night'], 0, ',', '.') }}/malam
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-emerald-700 transition-colors">{{ $room['name'] }}</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">{{ strip_tags($room['description']) }}</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4 text-sm text-gray-500">
                            <span class="flex items-center">
                                <x-heroicon-o-users class="w-4 h-4 mr-1" />
                                {{ $room['capacity'] }} Tamu
                            </span>
                            @if($room['size_sqm'])
                            <span class="flex items-center">
                                <x-heroicon-o-arrows-pointing-out class="w-4 h-4 mr-1" />
                                {{ $room['size_sqm'] }} m²
                            </span>
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('rooms.show', $room['slug']) }}" class="btn-press mt-4 w-full inline-flex items-center justify-center px-4 py-2.5 bg-emerald-50 text-emerald-700 rounded-xl hover:bg-emerald-100 transition-colors font-medium text-sm">
                        Detail & Booking
                        <x-heroicon-o-chevron-right class="w-4 h-4 ml-2" />
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12 scroll-reveal scroll-reveal--fade-in">
                <p class="text-gray-400 text-lg">Belum ada kamar tersedia. Silakan kembali lagi nanti.</p>
            </div>
            @endforelse
        </div>

        @if(count($rooms) > 0)
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center mt-10">
            <a href="{{ route('rooms.index') }}" class="inline-flex items-center text-emerald-700 font-medium hover:text-emerald-800 transition-colors group">
                Lihat Semua Kamar
                <x-heroicon-o-arrow-right class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" />
            </a>
        </div>
        @endif
    </div>
</section>
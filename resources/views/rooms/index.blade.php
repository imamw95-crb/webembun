@extends('layouts.app')

@section('title', 'Kamar')

@section('content')
<!-- Page Header -->
<section class="relative py-20 lg:py-28 bg-gray-900 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-black/80 via-gray-900/95 to-emerald-950/90"></div>
    <div class="absolute inset-0 bg-cover bg-center opacity-25" style="background-image: url('{{ asset('images/EMBUN/pemandangan.jpg') }}')"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="hero-animate hero-animate--up hero-animate--delay-1 inline-block px-4 py-1.5 bg-white/10 backdrop-blur-sm text-emerald-300 rounded-full text-sm font-medium mb-4 border border-white/10">Unit Glamping</span>
        <h1 class="hero-animate hero-animate--up hero-animate--delay-2 text-4xl lg:text-5xl font-bold text-white font-['Playfair_Display'] mb-4">Pilihan Glamping</h1>
        <p class="hero-animate hero-animate--up hero-animate--delay-3 text-gray-300 text-lg max-w-2xl mx-auto">Tersedia 3 tipe glamping dengan harga mulai Rp650.000 – Rp1.500.000/malam</p>
    </div>
</section>

<!-- Rooms Grid -->
<section class="py-16 lg:py-24 bg-gray-50" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($rooms->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" data-stagger="150">
            @foreach($rooms as $room)
            <div class="scroll-reveal scroll-reveal--fade-in-up card-lift group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="img-zoom relative h-56 lg:h-64 overflow-hidden">
                    @if($room->featured_image)
                        <img src="{{ asset('storage/' . $room->featured_image) }}" alt="{{ $room->name }}" class="w-full h-full object-cover" loading="lazy">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-emerald-200 to-teal-100 flex items-center justify-center">
                            <x-heroicon-o-building-office class="w-16 h-16 text-emerald-400" />
                        </div>
                    @endif
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-semibold text-emerald-700">
                        Rp {{ number_format($room->price_per_night, 0, ',', '.') }}/malam
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-emerald-700 transition-colors">{{ $room->name }}</h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2">{{ strip_tags($room->description) }}</p>
                    <div class="flex items-center space-x-4 text-sm text-gray-500 mb-4">
                        <span class="flex items-center"><x-heroicon-o-users class="w-4 h-4 mr-1" /> {{ $room->capacity }} Tamu</span>
                        @if($room->size_sqm)<span class="flex items-center"><x-heroicon-o-arrows-pointing-out class="w-4 h-4 mr-1" /> {{ $room->size_sqm }} m²</span>@endif
                    </div>
                    <a href="{{ route('rooms.show', $room->slug) }}" class="btn-press w-full inline-flex items-center justify-center px-4 py-2.5 bg-emerald-50 text-emerald-700 rounded-xl hover:bg-emerald-100 transition-colors font-medium text-sm">
                        Detail & Booking
                        <x-heroicon-o-chevron-right class="w-4 h-4 ml-2" />
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-10 scroll-reveal scroll-reveal--fade-in" data-aos="fade-up">
            {{ $rooms->links() }}
        </div>
        @else
        <div class="scroll-reveal scroll-reveal--fade-in text-center py-20" data-aos="fade-up">
            <x-heroicon-o-building-office class="w-20 h-20 mx-auto text-gray-300 mb-6" />
            <h3 class="text-xl font-medium text-gray-600 mb-2">Belum Ada Unit Glamping</h3>
            <p class="text-gray-400">Unit glamping akan segera tersedia. Silakan kembali lagi nanti.</p>
        </div>
        @endif
    </div>
</section>
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush

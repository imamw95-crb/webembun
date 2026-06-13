@extends('layouts.app')

@section('title', $room->name)

@section('content')
<!-- Hero -->
<section class="relative h-[50vh] lg:h-[65vh] overflow-hidden">
    @if($room->featured_image)
        <img src="{{ asset('storage/' . $room->featured_image) }}" alt="{{ $room->name }}" class="w-full h-full object-cover" loading="eager">
    @else
        <div class="w-full h-full bg-gradient-to-br from-emerald-700 to-teal-600"></div>
    @endif
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
    <div class="absolute bottom-0 left-0 right-0 p-6 lg:p-12 max-w-7xl mx-auto">
        <div class="max-w-3xl">
            <span class="hero-animate hero-animate--up hero-animate--delay-1 inline-block px-3 py-1 bg-white/20 backdrop-blur-sm text-white rounded-full text-xs font-medium mb-3 border border-white/20">Unit Glamping</span>
            <h1 class="hero-animate hero-animate--up hero-animate--delay-2 text-3xl lg:text-5xl font-bold text-white font-['Playfair_Display'] mb-2">{{ $room->name }}</h1>
            <p class="hero-animate hero-animate--up hero-animate--delay-3 text-emerald-200 text-lg lg:text-xl">Mulai dari Rp {{ number_format($room->price_per_night, 0, ',', '.') }} / malam — Termasuk Sarapan</p>
        </div>
    </div>
</section>

<!-- Content -->
<section class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
            <!-- Left - Info -->
            <div class="lg:col-span-2 space-y-8">
                <div class="scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Deskripsi</h2>
                    <div class="text-gray-600 leading-relaxed prose prose-emerald max-w-none">
                        {!! $room->description !!}
                    </div>
                </div>

                @if($room->amenities)
                <div class="scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Fasilitas Kamar</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                        @foreach($room->amenities as $amenity)
                        <div class="flex items-center space-x-2 p-3 bg-gray-50 rounded-xl hover:bg-emerald-50 transition-colors duration-300">
                            <x-heroicon-o-check class="w-4 h-4 text-emerald-500 shrink-0" />
                            <span class="text-sm text-gray-700">{{ $amenity }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                @if($room->galleries->count() > 0)
                <div class="scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Galeri Kamar</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach($room->galleries as $gallery)
                        <div class="img-zoom relative h-40 lg:h-48 rounded-xl overflow-hidden">
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->caption ?? 'Photo' }}" class="w-full h-full object-cover" loading="lazy">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Right - Booking Card -->
            <div class="lg:col-span-1">
                <div class="scroll-reveal scroll-reveal--fade-in-right sticky top-24 bg-white rounded-2xl shadow-lg border border-gray-100 p-6 lg:p-8 hover:shadow-xl transition-shadow duration-300" data-aos="fade-left">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Rp {{ number_format($room->price_per_night, 0, ',', '.') }}</h3>
                    <p class="text-gray-500 text-sm mb-6">per malam (termasuk sarapan)</p>

                    <div class="space-y-4 mb-6">
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
                            <span class="text-sm text-gray-600">Kapasitas</span>
                            <span class=\"font-medium text-gray-900\">{{ $room->capacity }} Orang</span>
                        </div>
                        @if($room->size_sqm)
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
                            <span class="text-sm text-gray-600">Luas Kamar</span>
                            <span class="font-medium text-gray-900">{{ $room->size_sqm }} m²</span>
                        </div>
                        @endif
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-xl">
                            <span class="text-sm text-gray-600">Status</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $room->is_available ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                {{ $room->is_available ? 'Tersedia' : 'Penuh' }}
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('booking.create', $room->slug) }}" 
                       class="btn-press w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-emerald-600 to-teal-500 text-white rounded-xl hover:from-emerald-700 hover:to-teal-600 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl {{ !$room->is_available ? 'opacity-50 cursor-not-allowed' : '' }}"
                       @if(!$room->is_available) onclick="return false" @endif>
                        <x-heroicon-o-calendar-days class="w-5 h-5 mr-2" />
                        {{ $room->is_available ? 'Pesan Sekarang' : 'Tidak Tersedia' }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Other Rooms -->
@if($otherRooms->count() > 0)
<section class="py-12 lg:py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="scroll-reveal scroll-reveal--fade-in-up text-2xl lg:text-3xl font-bold text-gray-900 font-['Playfair_Display'] mb-8" data-aos="fade-up">Unit Glamping Lainnya</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" data-stagger="150">
            @foreach($otherRooms as $other)
            <a href="{{ route('rooms.show', $other->slug) }}" class="scroll-reveal scroll-reveal--fade-in-up card-lift group bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="img-zoom h-48 overflow-hidden">
                    @if($other->featured_image)
                        <img src="{{ asset('storage/' . $other->featured_image) }}" alt="{{ $other->name }}" class="w-full h-full object-cover" loading="lazy">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-emerald-100 to-teal-50"></div>
                    @endif
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-900 group-hover:text-emerald-700 transition-colors">{{ $other->name }}</h3>
                    <p class="text-sm text-emerald-600 font-medium">Rp {{ number_format($other->price_per_night, 0, ',', '.') }}/malam</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection

@push('styles')
<style>
    .prose h1, .prose h2, .prose h3 { color: #111827; }
    .prose p { color: #4B5563; }
</style>
@endpush

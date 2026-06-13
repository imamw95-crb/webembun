@extends('layouts.app')

@section('title', 'Booking Berhasil')

@section('content')
<section class="py-16 lg:py-24">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="scroll-reveal scroll-reveal--scale-in bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-12">
            <!-- Success Icon -->
            <div class="w-20 h-20 mx-auto mb-6 bg-emerald-100 rounded-full flex items-center justify-center">
                <x-heroicon-o-check-circle class="w-10 h-10 text-emerald-600" />
            </div>

            <h1 class="scroll-reveal scroll-reveal--fade-in-up text-2xl lg:text-3xl font-bold text-gray-900 font-['Playfair_Display'] mb-2">Booking Berhasil!</h1>
            <p class="scroll-reveal scroll-reveal--fade-in-up text-gray-500 mb-8">Terima kasih, pemesanan Anda telah diterima. Kami akan menghubungi Anda untuk konfirmasi.</p>

            <div class="scroll-reveal scroll-reveal--fade-in-up bg-gray-50 rounded-xl p-6 mb-8 text-left">
                <h3 class="font-semibold text-gray-900 mb-4">Detail Pemesanan</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-500">Kode Booking</span>
                        <span class="font-medium text-gray-900">#{{ $booking->id }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Kamar</span>
                        <span class="font-medium text-gray-900">{{ $booking->room->name }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Nama Tamu</span>
                        <span class="font-medium text-gray-900">{{ $booking->guest_name }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Check-in</span>
                        <span class="font-medium text-gray-900">{{ $booking->check_in->format('d M Y') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Check-out</span>
                        <span class="font-medium text-gray-900">{{ $booking->check_out->format('d M Y') }}</span>
                    </div>
                    <div class="flex justify-between pt-3 border-t border-gray-200">
                        <span class="text-gray-500">Total</span>
                        <span class="font-bold text-emerald-700">Rp {{ number_format($booking->total_price, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Status</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">
                            {{ ucfirst($booking->status) }}
                        </span>
                    </div>
                </div>
            </div>

            <div class="scroll-reveal scroll-reveal--fade-in-up flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}" class="btn-press inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-emerald-600 to-teal-500 text-white rounded-xl hover:from-emerald-700 hover:to-teal-600 transition-all font-medium shadow-lg">
                    Kembali ke Beranda
                </a>
                <a href="{{ route('rooms.index') }}" class="btn-press inline-flex items-center justify-center px-6 py-3 border border-gray-200 text-gray-700 rounded-xl hover:bg-gray-50 transition-all font-medium">
                    Lihat Kamar Lain
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

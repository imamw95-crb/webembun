@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<section class="relative py-20 lg:py-28 bg-gray-900 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-black/80 via-gray-900/95 to-emerald-950/90"></div>
    <div class="absolute inset-0 bg-cover bg-center opacity-25" style="background-image: url('{{ asset('images/EMBUN/dalam resto.jpg') }}')"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="hero-animate hero-animate--up hero-animate--delay-1 inline-block px-4 py-1.5 bg-white/10 backdrop-blur-sm text-emerald-300 rounded-full text-sm font-medium mb-4 border border-white/10">Tentang Kami</span>
        <h1 class="hero-animate hero-animate--up hero-animate--delay-2 text-4xl lg:text-5xl font-bold text-white font-['Playfair_Display'] mb-4">Tentang Embun Village</h1>
        <p class="hero-animate hero-animate--up hero-animate--delay-3 text-gray-300 text-lg max-w-2xl mx-auto">Mengenal lebih dekat villa pegunungan kami</p>
    </div>
</section>

<section class="py-16 lg:py-24" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="scroll-reveal scroll-reveal--fade-in-left" data-aos="fade-right">
                <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-4">Cerita Kami</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-6">Embun Sangga Langit</h2>
                <div class="text-gray-600 leading-relaxed space-y-4">
                    <p><strong>Embun Sangga Langit (Embun Village)</strong> adalah destinasi glamping dan restoran bernuansa alam pegunungan yang terletak di kaki Gunung Ciremai, Kabupaten Kuningan, Jawa Barat. Berada di ketinggian ±1.200 mdpl, kami menawarkan pengalaman menginap dan bersantap yang tak terlupakan dengan pemandangan spektakuler Waduk Dharma.</p>
                    <p>Terdapat <strong>3 tipe unit glamping</strong> pilihan: Pine Dome (Pindom) untuk 2 orang, Edelweiss untuk 4 orang, dan Seruni — tipe terbaru dan paling premium dengan kamar mandi di dalam, water heater, dan Smart TV. Harga mulai dari Rp650.000 hingga Rp1.500.000 per malam, sudah termasuk sarapan.</p>
                    <p>Selain glamping, tersedia restoran dengan menu <strong>live seafood</strong> dan masakan khas Sunda, kolam renang (baru dibuka Mei 2026), panggung hiburan, musala unik berbentuk dome, kolam ikan, giant swing single & double, swimming with flamingo, serta berbagai spot foto estetik. Pengunjung yang hanya ingin makan/nongkrong tidak dikenakan biaya tiket masuk maupun parkir — cukup memesan makanan atau minuman di restoran.</p>
                    <p>Berjarak sekitar 1–1,5 jam dari Cirebon, Embun Sangga Langit menjadi tempat peristirahatan sempurna bagi Anda yang ingin melepas penat dari hiruk-pikuk perkotaan dan menikmati keindahan alam pegunungan.</p>
                </div>
            </div>
            <div class="scroll-reveal scroll-reveal--fade-in-right relative" data-aos="fade-left">
                <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-xl">
                    <img src="https://lh3.googleusercontent.com/gps-cs-s/APNQkAHW0HSAgbYlm3nwPfXkM_sIH375cHeemy54IJmMwlVQoqG2TqooDETUJydILb9S4Cl3xE2ATHZqwnpzpUnRKD3_OmJo8CM-pEtML05kwUfFOcJU9sj6CX-XQQsIds1DKKxv2WX_sw=w253-h337-k-no" alt="Embun Sangga Langit" class="w-full h-full object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-16 lg:py-24 bg-gray-50" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Mengapa Memilih Embun Village</h2>
            <p class="text-gray-500 max-w-2xl mx-auto">Nikmati pengalaman glamping dan kuliner tak terlupakan di kaki Gunung Ciremai</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-stagger="150">
            <div class="scroll-reveal scroll-reveal--fade-in-up card-lift text-center p-8 bg-white rounded-2xl shadow-sm hover:shadow-md" data-aos="zoom-in" data-aos-delay="0">
                <div class="w-16 h-16 mx-auto mb-4 bg-emerald-100 rounded-2xl flex items-center justify-center group-hover:bg-emerald-600 transition-colors">
                    <x-heroicon-o-face-smile class="w-8 h-8 text-emerald-600" />
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Pemandangan Waduk Dharma</h3>
                <p class="text-gray-500 text-sm">Nikmati panorama matahari terbenam yang memukau dari unit Pine Dome dan Edelweiss yang menghadap langsung ke Waduk Dharma</p>
            </div>
            <div class="scroll-reveal scroll-reveal--fade-in-up card-lift text-center p-8 bg-white rounded-2xl shadow-sm hover:shadow-md" data-aos="zoom-in" data-aos-delay="150" data-delay="150">
                <div class="w-16 h-16 mx-auto mb-4 bg-emerald-100 rounded-2xl flex items-center justify-center">
                    <x-heroicon-o-sparkles class="w-8 h-8 text-emerald-600" />
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Live Seafood & Sunda</h3>
                <p class="text-gray-500 text-sm">Restoran dengan menu live seafood dan masakan khas Sunda, termasuk nasi liwet. Pengunjung non-menginap tidak dikenakan biaya masuk!</p>
            </div>
            <div class="scroll-reveal scroll-reveal--fade-in-up card-lift text-center p-8 bg-white rounded-2xl shadow-sm hover:shadow-md" data-aos="zoom-in" data-aos-delay="300" data-delay="300">
                <div class="w-16 h-16 mx-auto mb-4 bg-emerald-100 rounded-2xl flex items-center justify-center">
                    <x-heroicon-o-user-group class="w-8 h-8 text-emerald-600" />
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Wahana & Spot Foto</h3>
                <p class="text-gray-500 text-sm">Giant swing single & double, swimming with flamingo, kolam ikan, dan berbagai spot foto estetik yang instagramable</p>
            </div>
        </div>
    </div>
</section>
@endsection

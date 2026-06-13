@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<section class="relative py-20 lg:py-28 bg-gray-900 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-gray-900 to-teal-900 opacity-90"></div>
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1920')] bg-cover bg-center opacity-20"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="hero-animate hero-animate--up hero-animate--delay-1 inline-block px-4 py-1.5 bg-white/10 backdrop-blur-sm text-emerald-300 rounded-full text-sm font-medium mb-4 border border-white/10">Kontak</span>
        <h1 class="hero-animate hero-animate--up hero-animate--delay-2 text-4xl lg:text-5xl font-bold text-white font-['Playfair_Display'] mb-4">Hubungi Kami</h1>
        <p class="hero-animate hero-animate--up hero-animate--delay-3 text-gray-300 text-lg max-w-2xl mx-auto">Ada pertanyaan? Kami siap membantu Anda</p>
    </div>
</section>

<section class="py-16 lg:py-24" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="scroll-reveal scroll-reveal--fade-in-left" data-aos="fade-right">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 font-['Playfair_Display'] mb-6">Informasi Kontak</h2>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4 group">
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                            <x-heroicon-o-map-pin class="w-6 h-6 text-emerald-600 group-hover:text-white transition-colors" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Lokasi</h3>
                            <p class="text-gray-500">Jl. Dano (Jl. Danau Palutungan), Desa Cisantana, Kec. Cigugur, Kab. Kuningan, Jawa Barat 45552</p>
                            <p class="text-gray-400 text-sm mt-1">±1.200 mdpl, di kaki Gunung Ciremai</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 group">
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                            <x-heroicon-o-phone class="w-6 h-6 text-emerald-600 group-hover:text-white transition-colors" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Telepon / WhatsApp</h3>
                            <p class="text-gray-500">+62 851-3690-7907</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4 group">
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                            <x-heroicon-o-envelope class="w-6 h-6 text-emerald-600 group-hover:text-white transition-colors" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
                            <a href="mailto:info@embunvillage.com" class="text-emerald-600 hover:text-emerald-700 transition-colors">info@embunvillage.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="scroll-reveal scroll-reveal--fade-in-right" data-aos="fade-left">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 lg:p-8 hover:shadow-md transition-shadow duration-300">
                    <h2 class="text-2xl font-bold text-gray-900 font-['Playfair_Display'] mb-6">Kirim Pesan</h2>
                    
                    @if(session('success'))
                    <div class="p-4 mb-6 bg-emerald-50 border border-emerald-100 rounded-xl text-emerald-700 text-sm scroll-reveal scroll-reveal--fade-in-up">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="scroll-reveal scroll-reveal--fade-in-up" data-delay="50">
                            <input type="text" name="name" value="{{ old('name') }}" required placeholder="Nama Lengkap *"
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all @error('name') border-red-300 @enderror">
                            @error('name') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="scroll-reveal scroll-reveal--fade-in-up" data-delay="100">
                                <input type="email" name="email" value="{{ old('email') }}" required placeholder="Email *"
                                    class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all @error('email') border-red-300 @enderror">
                                @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                            </div>
                            <div class="scroll-reveal scroll-reveal--fade-in-up" data-delay="150">
                                <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="No. Telepon"
                                    class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all">
                            </div>
                        </div>
                        <div class="scroll-reveal scroll-reveal--fade-in-up" data-delay="200">
                            <textarea name="message" rows="5" required placeholder="Pesan *"
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition-all @error('message') border-red-300 @enderror">{{ old('message') }}</textarea>
                            @error('message') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                        </div>
                        <div class="scroll-reveal scroll-reveal--fade-in-up" data-delay="250">
                            <button type="submit" class="btn-press w-full px-6 py-3 bg-gradient-to-r from-emerald-600 to-teal-500 text-white rounded-xl hover:from-emerald-700 hover:to-teal-600 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-16 lg:py-24 bg-gray-50 relative overflow-hidden" data-aos="fade-up">
    {{-- Decorative Elements --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-100/30 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-teal-100/30 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center max-w-2xl mx-auto mb-10" data-aos="fade-up">
            <span class="inline-flex items-center px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-4">
                <x-heroicon-s-map-pin class="w-4 h-4 mr-1.5" />
                Lokasi
            </span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Temukan Kami</h2>
            <p class="text-gray-500 leading-relaxed">Jl. Dano, Desa Cisantana, Kec. Cigugur, Kab. Kuningan, Jawa Barat 45552</p>
        </div>

        <div class="scroll-reveal scroll-reveal--fade-in-up relative group" data-aos="fade-up">
            {{-- Map Container with glassmorphism border --}}
            <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-500 border border-emerald-100/50">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7241.790045557524!2d108.43736073136618!3d-6.952194033117334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f176fa31e9fc7%3A0x7684ea740a25ac10!2sEmbun%20Sangga%20Langit%20(EMBUN%20VILLAGE)!5e1!3m2!1sid!2sid!4v1781309172290!5m2!1sid!2sid"
                    width="100%"
                    height="450"
                    style="border:0; display: block;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-full h-[300px] sm:h-[400px] lg:h-[450px] group-hover:scale-[1.02] transition-transform duration-700">
                </iframe>
            </div>

            {{-- Location info card overlay --}}
            <div class="absolute bottom-4 left-4 right-4 lg:bottom-6 lg:left-6 lg:right-auto lg:max-w-xs">
                <div class="bg-white/95 backdrop-blur-md rounded-xl p-4 lg:p-5 shadow-lg border border-emerald-100/60">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center shrink-0">
                            <x-heroicon-o-map-pin class="w-5 h-5 text-emerald-600" />
                        </div>
                        <div class="min-w-0">
                            <h4 class="font-semibold text-gray-900 text-sm">Embun Sangga Langit</h4>
                            <p class="text-gray-500 text-xs mt-0.5 leading-relaxed">Jl. Dano, Desa Cisantana, Kec. Cigugur, Kuningan 45552</p>
                            <a href="https://maps.google.com/?q=Embun+Sangga+Langit+Kuningan" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-emerald-600 hover:text-emerald-700 text-xs font-medium mt-2 transition-colors">
                                Buka di Google Maps
                                <x-heroicon-o-arrow-up-right class="w-3 h-3 ml-1" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

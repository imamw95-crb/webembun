<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Embun Sangga Langit (Embun Village) - Glamping dan restoran bernuansa alam pegunungan di kaki Gunung Ciremai, Kuningan. Pine Dome, Edelweiss, Seruni. Live seafood, kolam renang, giant swing.">
    <meta name="keywords" content="Embun Sangga Langit, Embun Village, glamping, Kuningan, Gunung Ciremai, Pine Dome, Edelweiss, Seruni, glamping Kuningan, live seafood, Waduk Dharma, Cisantana, Cigugur">
    
    <title>@yield('title', config('app.name')) - {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('storage/logo/logoweb.jpg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap" media="print" onload="this.media='all'">

    <!-- Preload hero images for faster LCP -->
    <link rel="preload" as="image" href="{{ asset('storage/baner/dome%20luar.jpg') }}" fetchpriority="high">
    <link rel="preload" as="image" href="{{ asset('storage/logo/logoweb.jpg') }}" fetchpriority="high">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/react.jsx'])
    
    @stack('styles')
</head>
<body class="font-sans text-gray-800 antialiased">
    <!-- Loading Screen -->
    <div id="page-loader" class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-gradient-to-br from-emerald-950 via-gray-900 to-teal-950 transition-opacity duration-700 ease-out" aria-hidden="true">
        <div class="relative flex flex-col items-center">
            <!-- Logo -->
            <div class="loader-logo w-20 h-20 mb-6 rounded-2xl overflow-hidden shadow-2xl shadow-emerald-900/50 ring-2 ring-emerald-500/20">
                <img src="{{ asset('storage/logo/logoweb.jpg') }}" alt="Embun Village" class="w-full h-full object-cover" loading="lazy">
            </div>
            <!-- Brand -->
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold font-['Playfair_Display'] text-white tracking-wide">Embun Village</h2>
                <p class="text-emerald-300/60 text-sm mt-1 tracking-widest uppercase text-[10px]">Glamping & Restoran Alam</p>
            </div>
            <!-- Loader Bar -->
            <div class="w-48 h-[3px] bg-white/10 rounded-full overflow-hidden">
                <div class="loader-bar h-full w-0 bg-gradient-to-r from-emerald-400 via-teal-400 to-emerald-300 rounded-full"></div>
            </div>
            <!-- Loading text -->
            <p class="text-white/30 text-xs mt-4 tracking-[0.2em] uppercase loader-text">Memuat...</p>
        </div>
    </div>

    <!-- Navigation -->
    <nav x-data="{ open: false }" class="fixed top-0 inset-x-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 lg:h-20 items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <img src="{{ asset('storage/logo/logoweb.jpg') }}" alt="Embun Village" class="h-10 lg:h-12 w-auto object-contain" loading="eager">
                </a>

                <!-- Desktop Nav -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                    <a href="{{ route('rooms.index') }}" class="nav-link {{ request()->routeIs('rooms.*') ? 'active' : '' }}">Glamping</a>
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Tentang</a>
                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a>
                    <a href="{{ route('rooms.index') }}" class="btn-primary btn-press micro-bounce">
                        Pesan Sekarang
                    </a>
                </div>

                <!-- Mobile toggle -->
                <button @click="open = !open" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition btn-press">
                    <x-heroicon-o-bars-3 x-show="!open" class="w-6 h-6" />
                    <x-heroicon-o-x-mark x-show="open" class="w-6 h-6" />
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" @click.outside="open = false" class="lg:hidden border-t border-gray-100 bg-white/95 backdrop-blur-md">
            <div class="px-4 py-4 space-y-3">
                <a href="{{ route('home') }}" class="block px-4 py-2 rounded-lg hover:bg-emerald-50 text-gray-700 hover:text-emerald-700 transition" @click="open = false">Beranda</a>
                <a href="{{ route('rooms.index') }}" class="block px-4 py-2 rounded-lg hover:bg-emerald-50 text-gray-700 hover:text-emerald-700 transition" @click="open = false">Glamping</a>
                <a href="{{ route('about') }}" class="block px-4 py-2 rounded-lg hover:bg-emerald-50 text-gray-700 hover:text-emerald-700 transition" @click="open = false">Tentang</a>
                <a href="{{ route('contact') }}" class="block px-4 py-2 rounded-lg hover:bg-emerald-50 text-gray-700 hover:text-emerald-700 transition" @click="open = false">Kontak</a>
                <a href="{{ route('rooms.index') }}" class="block w-full text-center px-4 py-2.5 bg-gradient-to-r from-emerald-600 to-teal-500 text-white rounded-lg font-medium hover:shadow-lg hover:shadow-emerald-200/50 transition-all" @click="open = false">Pesan Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16 lg:pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
                <!-- Brand -->
                <div class="lg:col-span-2 scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up">
                    <h3 class="text-2xl font-bold font-['Playfair_Display'] text-white mb-4">Embun Village</h3>
                    <p class="text-gray-400 leading-relaxed max-w-md">
                        Embun Sangga Langit (Embun Village) — Destinasi glamping dan restoran bernuansa alam pegunungan di kaki Gunung Ciremai, Kuningan, Jawa Barat. Nikmati pengalaman glamping, live seafood, kolam renang, dan berbagai wahana seru.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up" data-aos-delay="100" data-delay="100">
                    <h4 class="font-semibold text-white mb-4">Menu</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-emerald-400 transition">Beranda</a></li>
                        <li><a href="{{ route('rooms.index') }}" class="text-gray-400 hover:text-emerald-400 transition">Glamping</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-emerald-400 transition">Tentang</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-emerald-400 transition">Kontak</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up" data-aos-delay="200" data-delay="200">
                    <h4 class="font-semibold text-white mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start space-x-2">
                            <x-heroicon-o-map-pin class="w-5 h-5 mt-0.5 text-emerald-400 shrink-0" />
                            <span>Jl. Dano, Desa Cisantana, Kec. Cigugur, Kuningan 45552</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <x-heroicon-o-phone class="w-5 h-5 text-emerald-400 shrink-0" />
                            <span>+62 851-3690-7907</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <x-heroicon-o-envelope class="w-5 h-5 text-emerald-400 shrink-0" />
                            <a href="mailto:info@embunvillage.com" class="hover:text-emerald-400 transition">info@embunvillage.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-500 text-sm scroll-reveal scroll-reveal--fade-in" data-aos="fade-up">
                <p>&copy; {{ date('Y') }} Embun Sangga Langit (Embun Village). All rights reserved.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>

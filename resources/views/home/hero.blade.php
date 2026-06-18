<!-- Hero Section: Cinematic Slideshow — UI UX Pro Max -->
<section class="hero-slideshow relative min-h-[100dvh] flex items-center overflow-hidden bg-gray-900" id="hero">

    {{-- ============================================
         SLIDE BACKGROUNDS
         ============================================ --}}
    <div class="hero-slides-container absolute inset-0">
        <div class="hero-slide active" data-slide="0" style="background-image: url('{{ asset('storage/baner/dome%20luar.webp') }}');"></div>
        <div class="hero-slide" data-slide="1" style="background-image: url('{{ asset('storage/baner/kolam%20ikan.webp') }}');"></div>
        <div class="hero-slide" data-slide="2" style="background-image: url('{{ asset('storage/baner/lokasi.webp') }}');"></div>
        <div class="hero-slide" data-slide="3" style="background-image: url('{{ asset('storage/baner/pinedome.webp') }}');"></div>
    </div>

    {{-- ============================================
         PER-SLIDE GRADIENT OVERLAYS (lightened)
         ============================================ --}}
    <!-- Slide 0: Forest green + warm gold -->
    <div class="hero-overlay hero-overlay--0 absolute inset-0 z-10 bg-gradient-to-r from-emerald-950/50 via-emerald-900/25 to-amber-900/15"></div>
    <!-- Slide 1: Dark moody teal -->
    <div class="hero-overlay hero-overlay--1 absolute inset-0 z-10 bg-gradient-to-b from-slate-950/50 via-teal-950/30 to-slate-900/40"></div>
    <!-- Slide 2: Warm amber + charcoal -->
    <div class="hero-overlay hero-overlay--2 absolute inset-0 z-10 bg-gradient-to-br from-amber-950/40 via-stone-900/30 to-orange-950/35"></div>
    <!-- Slide 3: Deep blue + sky -->
    <div class="hero-overlay hero-overlay--3 absolute inset-0 z-10 bg-gradient-to-tr from-blue-950/50 via-indigo-900/25 to-sky-800/20"></div>

    {{-- Extra subtle dark base layer for text contrast --}}
    <div class="absolute inset-0 z-10 bg-black/20"></div>

    {{-- ============================================
         DECORATIVE FLOATING ELEMENTS
         ============================================ --}}
    <div class="absolute top-24 right-12 w-40 h-40 bg-emerald-500/8 rounded-full blur-3xl animate-float z-10"></div>
    <div class="absolute bottom-40 left-10 w-56 h-56 bg-amber-400/5 rounded-full blur-3xl animate-float z-10" style="animation-delay: 2.5s;"></div>
    <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-teal-400/5 rounded-full blur-3xl animate-float z-10" style="animation-delay: 4s;"></div>

    {{-- ============================================
         REACT MOUNT POINT — BlurText Headlines
         ============================================ --}}
    <div id="react-root" class="absolute inset-0 z-20 pointer-events-none"></div>

    {{-- ============================================
         SLIDE 1 — HERO BANNER (Glamping Welcome)
         ============================================ --}}
    <div class="hero-slide-content" data-slide-content="0">
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center lg:text-left w-full">
            <div class="lg:max-w-3xl">
                <!-- Badge -->
                <div class="hero-item hero-item--delay-1">
                    <div class="inline-flex items-center px-4 py-2 bg-black/20 backdrop-blur-md rounded-full text-emerald-300 text-sm font-medium mb-6 border border-emerald-400/30 hover:bg-white/15 transition-all duration-300 text-shadow-sm">
                        <x-heroicon-s-sparkles class="w-4 h-4 mr-2" />
                        <span>Glamping & Restoran Alam Pegunungan</span>
                    </div>
                </div>

                <!-- Main Headline — rendered by React BlurText -->
                <div class="react-headline-slot mb-4" data-slide-headline="0"></div>

                <!-- Subtitle -->
                <p class="hero-item hero-item--delay-3 text-lg sm:text-xl text-emerald-100/80 max-w-xl mb-8 leading-relaxed font-light tracking-wide text-shadow-sm">
                    Nikmati pengalaman glamping dan bersantap di restoran bernuansa alam pegunungan
                    di kaki Gunung Ciremai, ±1.200 mdpl.
                </p>

                <!-- CTAs -->
                <div class="hero-item hero-item--delay-4 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('rooms.index') }}" class="btn-hero-primary inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-emerald-500 to-emerald-700 text-white rounded-xl hover:from-emerald-400 hover:to-emerald-600 transition-all duration-300 font-semibold text-lg shadow-2xl shadow-emerald-900/50 hover:shadow-emerald-500/30 hover:-translate-y-0.5 btn-press text-shadow-sm">
                        <x-heroicon-o-building-office class="w-5 h-5 mr-2" />
                        Lihat Unit Glamping
                    </a>
                    <a href="{{ route('about') }}" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white rounded-xl hover:bg-white/15 hover:border-white/60 transition-all duration-300 font-medium btn-press backdrop-blur-sm text-shadow-sm">
                        <x-heroicon-o-information-circle class="w-5 h-5 mr-2" />
                        Jelajahi Lebih Lanjut
                    </a>
                </div>

                <!-- Stats -->
                <div class="hero-item hero-item--delay-5 grid grid-cols-3 gap-8 mt-12 pt-12 border-t border-white/10 max-w-lg mx-auto lg:mx-0 text-shadow-sm">
                    <div class="text-center lg:text-left">
                        <div class="text-2xl lg:text-3xl font-bold text-white font-['Playfair_Display']">3</div>
                        <div class="text-sm text-emerald-200/70 mt-1 tracking-wider uppercase">Tipe Glamping</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-2xl lg:text-3xl font-bold text-white font-['Playfair_Display']">±1.200</div>
                        <div class="text-sm text-emerald-200/70 mt-1 tracking-wider uppercase">Mdpl Ketinggian</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-2xl lg:text-3xl font-bold text-white font-['Playfair_Display']">4.8</div>
                        <div class="text-sm text-emerald-200/70 mt-1 tracking-wider uppercase">Rating ★ Google</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================
         SLIDE 2 — STATS & TRUST
         ============================================ --}}
    <div class="hero-slide-content" data-slide-content="1">
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center w-full h-full flex items-center">
            <div class="w-full">
                <!-- Badge -->
                <div class="hero-item hero-item--delay-1 mb-8 text-shadow-sm">
                    <span class="inline-flex items-center px-4 py-2 bg-black/20 backdrop-blur-md rounded-full text-teal-300 text-sm font-medium border border-teal-400/30">
                        <x-heroicon-s-star class="w-4 h-4 mr-2" />
                        Mengapa Memilih Embun Village
                    </span>
                </div>

                <!-- Headline — rendered by React BlurText -->
                <div class="react-headline-slot mb-4" data-slide-headline="1"></div>

                <p class="hero-item hero-item--delay-3 text-lg text-white/70 max-w-2xl mx-auto mb-12 leading-relaxed text-shadow-sm">
                    Pengalaman menginap premium di ketinggian ±1.200 mdpl dengan pemandangan Waduk Dharma dan fasilitas terlengkap
                </p>

                <!-- Stats Cards Grid -->
                <div class="hero-item hero-item--delay-4 grid grid-cols-2 lg:grid-cols-4 gap-4 max-w-4xl mx-auto">
                    <div class="hero-stat-card group">
                        <div class="text-3xl lg:text-4xl font-bold text-white font-['Playfair_Display'] mb-1">3</div>
                        <div class="text-sm text-teal-200/70 uppercase tracking-wider">Tipe Glamping</div>
                        <div class="w-8 h-0.5 bg-teal-500/40 mx-auto mt-3 group-hover:w-12 transition-all duration-500"></div>
                    </div>
                    <div class="hero-stat-card group">
                        <div class="text-3xl lg:text-4xl font-bold text-white font-['Playfair_Display'] mb-1">±1.200</div>
                        <div class="text-sm text-teal-200/70 uppercase tracking-wider">Mdpl Ketinggian</div>
                        <div class="w-8 h-0.5 bg-teal-500/40 mx-auto mt-3 group-hover:w-12 transition-all duration-500"></div>
                    </div>
                    <div class="hero-stat-card group">
                        <div class="text-3xl lg:text-4xl font-bold text-white font-['Playfair_Display'] mb-1">4.8</div>
                        <div class="text-sm text-teal-200/70 uppercase tracking-wider">Rating ★ Google</div>
                        <div class="w-8 h-0.5 bg-teal-500/40 mx-auto mt-3 group-hover:w-12 transition-all duration-500"></div>
                    </div>
                    <div class="hero-stat-card group">
                        <div class="text-3xl lg:text-4xl font-bold text-white font-['Playfair_Display'] mb-1">Live</div>
                        <div class="text-sm text-teal-200/70 uppercase tracking-wider">Seafood Restaurant</div>
                        <div class="w-8 h-0.5 bg-teal-500/40 mx-auto mt-3 group-hover:w-12 transition-all duration-500"></div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="hero-item hero-item--delay-5 mt-10 text-shadow-sm">
                    <a href="{{ route('rooms.index') }}" class="inline-flex items-center px-6 py-3 bg-teal-600/80 backdrop-blur-sm text-white rounded-xl hover:bg-teal-500 transition-all duration-300 font-medium border border-teal-400/30 btn-press">
                        Pesan Sekarang
                        <x-heroicon-o-arrow-right class="w-4 h-4 ml-2" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================
         SLIDE 3 — RESTAURANT & DINING
         ============================================ --}}
    <div class="hero-slide-content" data-slide-content="2">
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center lg:text-right w-full">
            <div class="lg:max-w-2xl lg:ml-auto">
                <!-- Badge -->
                <div class="hero-item hero-item--delay-1">
                    <span class="inline-flex items-center px-4 py-2 bg-black/20 backdrop-blur-md rounded-full text-amber-300 text-sm font-medium mb-6 border border-amber-400/30 text-shadow-sm">
                        <x-heroicon-s-fire class="w-4 h-4 mr-2" />
                        Restoran & Live Seafood
                    </div>
                </div>

                <!-- Headline — rendered by React BlurText -->
                <div class="react-headline-slot mb-4" data-slide-headline="2"></div>

                <p class="hero-item hero-item--delay-3 text-lg text-amber-100/80 max-w-lg lg:ml-auto mb-8 leading-relaxed text-shadow-sm">
                    Nikmati hidangan live seafood dan masakan khas Sunda dengan latar pemandangan pegunungan dan Waduk Dharma yang memukau
                </p>

                <!-- Features -->
                <div class="hero-item hero-item--delay-4 flex flex-wrap gap-3 justify-center lg:justify-end mb-8 text-shadow-sm">
                    <span class="px-4 py-2 bg-black/20 backdrop-blur-sm rounded-full text-amber-200/90 text-sm border border-white/15">🔥 Live Seafood</span>
                    <span class="px-4 py-2 bg-black/20 backdrop-blur-sm rounded-full text-amber-200/90 text-sm border border-white/15">🍛 Masakan Sunda</span>
                    <span class="px-4 py-2 bg-black/20 backdrop-blur-sm rounded-full text-amber-200/90 text-sm border border-white/15">🌿 Pemandangan Alam</span>
                    <span class="px-4 py-2 bg-black/20 backdrop-blur-sm rounded-full text-amber-200/90 text-sm border border-white/15">🍹 Menu Spesial</span>
                </div>

                <!-- CTA -->
                <div class="hero-item hero-item--delay-5 flex flex-col sm:flex-row gap-4 justify-center lg:justify-end">
                    <a href="{{ route('about') }}" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-amber-600 to-orange-600 text-white rounded-xl hover:from-amber-500 hover:to-orange-500 transition-all duration-300 font-semibold shadow-2xl shadow-amber-900/50 btn-press text-shadow-sm">
                        <x-heroicon-o-sparkles class="w-5 h-5 mr-2" />
                        Lihat Menu Restoran
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white/90 rounded-xl hover:bg-white/15 hover:border-white/60 transition-all duration-300 font-medium btn-press backdrop-blur-sm text-shadow-sm">
                        Reservasi Meja
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================
         SLIDE 4 — ACTIVITIES & ADVENTURES
         ============================================ --}}
    <div class="hero-slide-content" data-slide-content="3">
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center lg:text-left w-full">
            <div class="lg:max-w-3xl">
                <!-- Badge -->
                <div class="hero-item hero-item--delay-1">
                    <span class="inline-flex items-center px-4 py-2 bg-black/20 backdrop-blur-md rounded-full text-sky-300 text-sm font-medium mb-6 border border-sky-400/30 text-shadow-sm">
                        <x-heroicon-s-sun class="w-4 h-4 mr-2" />
                        Aktivitas & Petualangan
                    </div>
                </div>

                <!-- Headline — rendered by React BlurText -->
                <div class="react-headline-slot mb-4" data-slide-headline="3"></div>

                <p class="hero-item hero-item--delay-3 text-lg text-sky-100/80 max-w-xl mb-8 leading-relaxed text-shadow-sm">
                    Dari trekking di hutan pinus, wahana air seru, hingga spot foto estetik dengan panorama Gunung Ciremai
                </p>

                <!-- Activity Tags -->
                <div class="hero-item hero-item--delay-4 flex flex-wrap gap-3 justify-center lg:justify-start mb-10">
                    <span class="activity-chip activity-chip--trek">
                        <x-heroicon-s-map class="w-4 h-4 mr-1.5" />
                        Trekking
                    </span>
                    <span class="activity-chip activity-chip--water">
                        <x-heroicon-s-swatch class="w-4 h-4 mr-1.5" />
                        Water Games
                    </span>
                    <span class="activity-chip activity-chip--photo">
                        <x-heroicon-s-camera class="w-4 h-4 mr-1.5" />
                        Spot Foto
                    </span>
                    <span class="activity-chip activity-chip--swing">
                        <x-heroicon-s-heart class="w-4 h-4 mr-1.5" />
                        Giant Swing
                    </span>
                    <span class="activity-chip activity-chip--pool">
                        <x-heroicon-s-fire class="w-4 h-4 mr-1.5" />
                        Kolam Renang
                    </span>
                </div>

                <!-- CTA -->
                <div class="hero-item hero-item--delay-5 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('about') }}" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-sky-500 to-blue-700 text-white rounded-xl hover:from-sky-400 hover:to-blue-600 transition-all duration-300 font-semibold shadow-2xl shadow-sky-900/50 btn-press text-shadow-sm">
                        <x-heroicon-o-sparkles class="w-5 h-5 mr-2" />
                        Lihat Semua Aktivitas
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white/90 rounded-xl hover:bg-white/15 hover:border-white/60 transition-all duration-300 font-medium btn-press backdrop-blur-sm text-shadow-sm">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================
         SLIDE NAVIGATION
         ============================================ --}}
    <div class="hero-dots absolute bottom-24 lg:bottom-20 left-1/2 -translate-x-1/2 z-20 flex items-center gap-3">
        <button class="hero-dot active" data-slide="0" aria-label="Glamping Welcome"></button>
        <button class="hero-dot" data-slide="1" aria-label="Stats & Trust"></button>
        <button class="hero-dot" data-slide="2" aria-label="Restaurant & Dining"></button>
        <button class="hero-dot" data-slide="3" aria-label="Activities"></button>
    </div>

    <!-- Slide Counter -->
    <div class="hero-counter absolute bottom-24 lg:bottom-20 right-8 z-20 text-white/30 text-sm font-mono tracking-wider">
        <span class="hero-counter-current">01</span>
        <span class="mx-1 text-white/20">/</span>
        <span class="hero-counter-total">04</span>
    </div>

    <!-- Slide indicator labels -->
    <div class="absolute bottom-24 lg:bottom-20 left-8 z-20 hidden lg:block">
        <div class="hero-slide-label z-20 text-xs text-white/40 uppercase tracking-[0.2em] font-light">Glamping Experience</div>
        <div class="hero-slide-label z-20 text-xs text-white/40 uppercase tracking-[0.2em] font-light" style="display:none;">Stats & Trust</div>
        <div class="hero-slide-label z-20 text-xs text-white/40 uppercase tracking-[0.2em] font-light" style="display:none;">Restaurant & Dining</div>
        <div class="hero-slide-label z-20 text-xs text-white/40 uppercase tracking-[0.2em] font-light" style="display:none;">Activities</div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 animate-bounce">
        <div class="flex flex-col items-center gap-2">
            <span class="text-[10px] text-white/30 uppercase tracking-[0.3em] font-light hidden sm:block">Scroll</span>
            <x-heroicon-o-chevron-down class="w-5 h-5 text-white/40" />
        </div>
    </div>
</section>
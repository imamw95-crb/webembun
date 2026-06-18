<!-- Restaurant & Dining Section -->
<section class="py-16 lg:py-24 bg-white relative overflow-hidden" id="restaurant" data-aos="fade-up">
    <div class="absolute top-0 right-0 w-96 h-96 bg-amber-100/40 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-emerald-100/40 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center max-w-3xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
            <span class="inline-flex items-center px-4 py-1.5 bg-amber-100 text-amber-700 rounded-full text-sm font-medium mb-4">
                <x-heroicon-s-fire class="w-4 h-4 mr-1.5" />
                Restoran & Live Seafood
            </span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">
                Bersantap di <span class="text-amber-600">Antara Awan</span>
            </h2>
            <p class="text-gray-500 leading-relaxed max-w-2xl mx-auto">
                Nikmati hidangan live seafood dan masakan khas Sunda dengan pemandangan langsung 
                Waduk Dharma dan hamparan pegunungan hijau yang menakjubkan
            </p>
        </div>

        <div class="scroll-reveal scroll-reveal--fade-in-up grid grid-cols-1 lg:grid-cols-5 gap-4 lg:gap-6 mb-12 lg:mb-16" data-aos="fade-up">
            <div class="lg:col-span-3 relative group rounded-2xl overflow-hidden h-72 lg:h-[28rem] img-zoom shadow-lg shadow-amber-900/10">
                <img src="{{ asset('storage/resto/outdor.webp') }}" alt="Outdoor Dining Embun Village" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <span class="inline-flex items-center px-3 py-1.5 bg-white/20 backdrop-blur-md rounded-full text-white text-xs font-medium border border-white/20">
                        <x-heroicon-s-sun class="w-3.5 h-3.5 mr-1.5" />
                        Outdoor Dining dengan Pemandangan
                    </span>
                </div>
            </div>

            <div class="lg:col-span-2 grid grid-cols-2 lg:grid-cols-1 gap-4 lg:gap-6">
                <div class="relative group rounded-2xl overflow-hidden h-48 lg:h-[13.5rem] img-zoom shadow-lg shadow-amber-900/10">
                    <img src="{{ asset('storage/resto/dalam%20resto.webp') }}" alt="Restaurant Interior" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="text-xs text-white/80 bg-black/20 backdrop-blur-sm px-2 py-1 rounded-full">Interior Nyaman</span>
                    </div>
                </div>
                <div class="relative group rounded-2xl overflow-hidden h-48 lg:h-[13.5rem] img-zoom shadow-lg shadow-amber-900/10">
                    <img src="{{ asset('storage/resto/dalam%20resto%202.webp') }}" alt="Restaurant Interior" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="text-xs text-white/80 bg-black/20 backdrop-blur-sm px-2 py-1 rounded-full">Suasana Hangat</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-reveal scroll-reveal--fade-in-up grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 mb-12 lg:mb-16" data-aos="fade-up" data-stagger="100">
            <div class="group card-lift p-6 rounded-2xl bg-gradient-to-br from-amber-50 to-orange-50 border border-amber-100 hover:border-amber-200 hover:shadow-lg hover:shadow-amber-200/30 transition-all duration-500">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center mb-4 shadow-lg shadow-amber-200/50 group-hover:scale-110 transition-transform duration-300">
                    <x-heroicon-o-fire class="w-7 h-7 text-white" />
                </div>
                <h4 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-amber-700 transition-colors">Live Seafood</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Ikan gurame, udang, dan kepiting segar langsung dari kolam, diolah dengan bumbu khas Sunda dan pilihan rasa pedas manis gurih.</p>
            </div>
            <div class="group card-lift p-6 rounded-2xl bg-gradient-to-br from-emerald-50 to-teal-50 border border-emerald-100 hover:border-emerald-200 hover:shadow-lg hover:shadow-emerald-200/30 transition-all duration-500">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center mb-4 shadow-lg shadow-emerald-200/50 group-hover:scale-110 transition-transform duration-300">
                    <x-heroicon-o-sparkles class="w-7 h-7 text-white" />
                </div>
                <h4 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-emerald-700 transition-colors">Masakan Sunda</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Nasi liwet, karedok, pepes ikan, hingga sate maranggi — cita rasa tradisional Sunda yang autentik dari bahan-bahan lokal pilihan.</p>
            </div>
            <div class="group card-lift p-6 rounded-2xl bg-gradient-to-br from-sky-50 to-blue-50 border border-sky-100 hover:border-sky-200 hover:shadow-lg hover:shadow-sky-200/30 transition-all duration-500">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-sky-400 to-blue-500 flex items-center justify-center mb-4 shadow-lg shadow-sky-200/50 group-hover:scale-110 transition-transform duration-300">
                    <x-heroicon-o-sun class="w-7 h-7 text-white" />
                </div>
                <h4 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-sky-700 transition-colors">Pemandangan Alam</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Makan malam romantis dengan latar matahari terbenam di balik Waduk Dharma dan Gunung Ciremai yang megah, ditemani udara sejuk pegunungan.</p>
            </div>
            <div class="group card-lift p-6 rounded-2xl bg-gradient-to-br from-rose-50 to-pink-50 border border-rose-100 hover:border-rose-200 hover:shadow-lg hover:shadow-rose-200/30 transition-all duration-500">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-rose-400 to-pink-500 flex items-center justify-center mb-4 shadow-lg shadow-rose-200/50 group-hover:scale-110 transition-transform duration-300">
                    <x-heroicon-o-star class="w-7 h-7 text-white" />
                </div>
                <h4 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-rose-700 transition-colors">Menu Spesial</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Signature dish seperti Gurame Bakar Pesmol, Udang Saus Padang, Sop Ikan Nila segar, dan aneka minuman tradisional hangat yang menggugah selera.</p>
            </div>
        </div>
    </div>
</section>
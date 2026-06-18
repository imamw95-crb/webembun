{{-- Full-width Food Banner --}}
<section class="scroll-reveal scroll-reveal--fade-in-up relative w-full h-[60vh] lg:h-[70vh] overflow-hidden group img-zoom shadow-xl" data-aos="fade-up">
    <img src="{{ asset('storage/resto/makanan.webp') }}" alt="Signature Menu Embun Village" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" loading="lazy">
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-black/20"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-black/20"></div>

    <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-amber-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 left-1/4 w-48 h-48 bg-orange-500/10 rounded-full blur-3xl"></div>

    <div class="absolute inset-0 flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-2xl">
                <div class="scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up">
                    <span class="inline-flex items-center px-4 py-2 bg-amber-500/20 backdrop-blur-md rounded-full text-amber-300 text-sm font-medium border border-amber-400/30 mb-6">
                        <x-heroicon-s-sparkles class="w-4 h-4 mr-2" />
                        Signature Menu
                    </span>
                </div>
                <div class="scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up" data-aos-delay="150" data-delay="150">
                    <h3 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white font-['Playfair_Display'] mb-4 leading-tight">
                        Cicipi Kelezatan<br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-orange-400">di Ketinggian 1.200 Mdpl</span>
                    </h3>
                </div>
                <div class="scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up" data-aos-delay="250" data-delay="250">
                    <p class="text-white/70 max-w-xl mb-8 text-base lg:text-lg leading-relaxed">
                        Dari live seafood segar hingga masakan Sunda autentik — setiap hidangan disajikan dengan pemandangan Gunung Ciremai yang tak terlupakan
                    </p>
                </div>
                <div class="scroll-reveal scroll-reveal--fade-in-up flex flex-wrap gap-4" data-aos="fade-up" data-aos-delay="350" data-delay="350">
                    <a href="{{ route('about') }}" class="inline-flex items-center px-7 py-3.5 bg-gradient-to-r from-amber-500 to-orange-600 text-white rounded-xl hover:from-amber-400 hover:to-orange-500 transition-all duration-300 font-semibold text-base shadow-2xl shadow-amber-900/40 btn-press micro-bounce">
                        <x-heroicon-o-sparkles class="w-5 h-5 mr-2" />
                        Lihat Menu Lengkap
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-7 py-3.5 bg-white/15 backdrop-blur-md text-white rounded-xl hover:bg-white/25 transition-all duration-300 font-medium text-base border border-white/20 btn-press">
                        <x-heroicon-o-phone class="w-5 h-5 mr-2" />
                        Reservasi Meja
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
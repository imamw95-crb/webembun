<!-- Facilities Section -->
@if(count($facilities) > 0)
<section class="py-16 lg:py-24 bg-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center max-w-2xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-4">Fasilitas</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Fasilitas & Wahana</h2>
            <p class="text-gray-500 leading-relaxed">Dari kolam renang, giant swing, hingga live seafood — semua ada di sini!</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6" data-stagger="80">
            @foreach($facilities as $facility)
            <div class="scroll-reveal scroll-reveal--scale-in card-lift group text-center p-6 rounded-2xl bg-gray-50 hover:bg-emerald-50 hover:shadow-md transition-all duration-300" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 80 }}">
                <div class="w-12 h-12 mx-auto mb-3 flex items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                    @if($facility['icon'])
                        <x-dynamic-component :component="'heroicon-o-' . $facility['icon']" class="w-6 h-6" />
                    @else
                        <x-heroicon-o-sparkles class="w-6 h-6" />
                    @endif
                </div>
                <h4 class="font-medium text-gray-900 text-sm">{{ $facility['name'] }}</h4>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
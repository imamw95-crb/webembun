<!-- Gallery Section -->
@if(count($galleries) > 0)
<section class="py-16 lg:py-24 bg-gray-50" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center max-w-2xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-4">Galeri</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Galeri Embun Village</h2>
            <p class="text-gray-500 leading-relaxed">Keindahan glamping, restoran, dan wahana dalam satu frame</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" data-stagger="100">
            @foreach($galleries as $gallery)
            <div class="scroll-reveal scroll-reveal--scale-in img-zoom group relative h-48 lg:h-56 rounded-xl overflow-hidden cursor-pointer" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                <img src="{{ asset('storage/' . $gallery['image']) }}" alt="{{ $gallery['caption'] ?? 'Gallery' }}" class="w-full h-full object-cover" loading="lazy">
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-colors duration-300"></div>
                @if(!empty($gallery['caption']))
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <p class="text-white text-sm">{{ $gallery['caption'] }}</p>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
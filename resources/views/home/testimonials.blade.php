<!-- Testimonials -->
@if(count($testimonials) > 0)
<section class="py-16 lg:py-24 bg-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center max-w-2xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-4">Testimoni</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Apa Kata Tamu</h2>
            <p class="text-gray-500 leading-relaxed">Pengalaman menginap yang dibagikan oleh tamu kami</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" data-stagger="150">
            @foreach($testimonials as $testimonial)
            <div class="scroll-reveal scroll-reveal--fade-in-up card-lift p-6 lg:p-8 rounded-2xl bg-gray-50 border border-gray-100 hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="flex items-center mb-4">
                    <div class="flex text-amber-400">
                        @for($i = 0; $i < 5; $i++)
                            <x-heroicon-s-star class="w-4 h-4 {{ $i < $testimonial['rating'] ? 'text-amber-400' : 'text-gray-200' }}" />
                        @endfor
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed mb-6 italic">"{{ $testimonial['content'] }}"</p>
                <div class="flex items-center space-x-3">
                    @if(!empty($testimonial['avatar']))
                        <img src="{{ asset('storage/' . $testimonial['avatar']) }}" alt="{{ $testimonial['name'] }}" class="w-10 h-10 rounded-full object-cover" loading="lazy">
                    @else
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center text-white font-medium">
                            {{ substr($testimonial['name'], 0, 1) }}
                        </div>
                    @endif
                    <div>
                        <p class="font-medium text-gray-900">{{ $testimonial['name'] }}</p>
                        <p class="text-sm text-gray-400">Tamu Villa</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
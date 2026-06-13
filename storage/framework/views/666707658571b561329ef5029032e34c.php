

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section: Cinematic Slideshow — UI UX Pro Max -->
<section class="hero-slideshow relative min-h-[100dvh] flex items-center overflow-hidden bg-gray-900" id="hero">

    
    <div class="hero-slides-container absolute inset-0">
        <div class="hero-slide active" data-slide="0" style="background-image: url('<?php echo e(asset('storage/baner/dome%20luar.jpg')); ?>'); background-image: -webkit-image-set(url('<?php echo e(asset('storage/baner/dome%20luar.jpg')); ?>') 1x);"></div>
        <div class="hero-slide" data-slide="1" style="background-image: url('<?php echo e(asset('storage/baner/kolam%20ikan.webp')); ?>');"></div>
        <div class="hero-slide" data-slide="2" style="background-image: url('<?php echo e(asset('storage/baner/lokasi.webp')); ?>');"></div>
        <div class="hero-slide" data-slide="3" style="background-image: url('<?php echo e(asset('storage/baner/pinedome.webp')); ?>');"></div>
    </div>

    
    <!-- Slide 0: Forest green + warm gold -->
    <div class="hero-overlay hero-overlay--0 absolute inset-0 z-10 bg-gradient-to-r from-emerald-950/50 via-emerald-900/25 to-amber-900/15"></div>
    <!-- Slide 1: Dark moody teal -->
    <div class="hero-overlay hero-overlay--1 absolute inset-0 z-10 bg-gradient-to-b from-slate-950/50 via-teal-950/30 to-slate-900/40"></div>
    <!-- Slide 2: Warm amber + charcoal -->
    <div class="hero-overlay hero-overlay--2 absolute inset-0 z-10 bg-gradient-to-br from-amber-950/40 via-stone-900/30 to-orange-950/35"></div>
    <!-- Slide 3: Deep blue + sky -->
    <div class="hero-overlay hero-overlay--3 absolute inset-0 z-10 bg-gradient-to-tr from-blue-950/50 via-indigo-900/25 to-sky-800/20"></div>

    
    <div class="absolute inset-0 z-10 bg-black/20"></div>

    
    <div class="absolute top-24 right-12 w-40 h-40 bg-emerald-500/8 rounded-full blur-3xl animate-float z-10"></div>
    <div class="absolute bottom-40 left-10 w-56 h-56 bg-amber-400/5 rounded-full blur-3xl animate-float z-10" style="animation-delay: 2.5s;"></div>
    <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-teal-400/5 rounded-full blur-3xl animate-float z-10" style="animation-delay: 4s;"></div>

    
    
    <div id="react-root" class="absolute inset-0 z-20 pointer-events-none"></div>

    
    <div class="hero-slide-content" data-slide-content="0">
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center lg:text-left w-full">
            <div class="lg:max-w-3xl">
                <!-- Badge -->
                <div class="hero-item hero-item--delay-1">
                    <div class="inline-flex items-center px-4 py-2 bg-black/20 backdrop-blur-md rounded-full text-emerald-300 text-sm font-medium mb-6 border border-emerald-400/30 hover:bg-white/15 transition-all duration-300 text-shadow-sm">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-sparkles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
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
                    <a href="<?php echo e(route('rooms.index')); ?>" class="btn-hero-primary inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-emerald-500 to-emerald-700 text-white rounded-xl hover:from-emerald-400 hover:to-emerald-600 transition-all duration-300 font-semibold text-lg shadow-2xl shadow-emerald-900/50 hover:shadow-emerald-500/30 hover:-translate-y-0.5 btn-press text-shadow-sm">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-building-office'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        Lihat Unit Glamping
                    </a>
                    <a href="<?php echo e(route('about')); ?>" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white rounded-xl hover:bg-white/15 hover:border-white/60 transition-all duration-300 font-medium btn-press backdrop-blur-sm text-shadow-sm">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-information-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
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

    
    <div class="hero-slide-content" data-slide-content="1">
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center w-full h-full flex items-center">
            <div class="w-full">
                <!-- Badge -->
                <div class="hero-item hero-item--delay-1 mb-8 text-shadow-sm">
                    <span class="inline-flex items-center px-4 py-2 bg-black/20 backdrop-blur-md rounded-full text-teal-300 text-sm font-medium border border-teal-400/30">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-star'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
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
                    <a href="<?php echo e(route('rooms.index')); ?>" class="inline-flex items-center px-6 py-3 bg-teal-600/80 backdrop-blur-sm text-white rounded-xl hover:bg-teal-500 transition-all duration-300 font-medium border border-teal-400/30 btn-press">
                        Pesan Sekarang
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 ml-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    
    <div class="hero-slide-content" data-slide-content="2">
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center lg:text-right w-full">
            <div class="lg:max-w-2xl lg:ml-auto">
                <!-- Badge -->
                <div class="hero-item hero-item--delay-1">
                    <span class="inline-flex items-center px-4 py-2 bg-black/20 backdrop-blur-md rounded-full text-amber-300 text-sm font-medium mb-6 border border-amber-400/30 text-shadow-sm">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-fire'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
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
                    <a href="<?php echo e(route('about')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-amber-600 to-orange-600 text-white rounded-xl hover:from-amber-500 hover:to-orange-500 transition-all duration-300 font-semibold shadow-2xl shadow-amber-900/50 btn-press text-shadow-sm">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-sparkles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        Lihat Menu Restoran
                    </a>
                    <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white/90 rounded-xl hover:bg-white/15 hover:border-white/60 transition-all duration-300 font-medium btn-press backdrop-blur-sm text-shadow-sm">
                        Reservasi Meja
                    </a>
                </div>
            </div>
        </div>
    </div>

    
    <div class="hero-slide-content" data-slide-content="3">
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center lg:text-left w-full">
            <div class="lg:max-w-3xl">
                <!-- Badge -->
                <div class="hero-item hero-item--delay-1">
                    <span class="inline-flex items-center px-4 py-2 bg-black/20 backdrop-blur-md rounded-full text-sky-300 text-sm font-medium mb-6 border border-sky-400/30 text-shadow-sm">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-sun'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
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
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-map'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1.5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        Trekking
                    </span>
                    <span class="activity-chip activity-chip--water">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-swatch'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1.5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        Water Games
                    </span>
                    <span class="activity-chip activity-chip--photo">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-camera'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1.5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        Spot Foto
                    </span>
                    <span class="activity-chip activity-chip--swing">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-heart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1.5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        Giant Swing
                    </span>
                    <span class="activity-chip activity-chip--pool">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-fire'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1.5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        Kolam Renang
                    </span>
                </div>

                <!-- CTA -->
                <div class="hero-item hero-item--delay-5 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="<?php echo e(route('about')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-sky-500 to-blue-700 text-white rounded-xl hover:from-sky-400 hover:to-blue-600 transition-all duration-300 font-semibold shadow-2xl shadow-sky-900/50 btn-press text-shadow-sm">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-sparkles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        Lihat Semua Aktivitas
                    </a>
                    <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white/90 rounded-xl hover:bg-white/15 hover:border-white/60 transition-all duration-300 font-medium btn-press backdrop-blur-sm text-shadow-sm">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>

    
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
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-white/40']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
        </div>
    </div>
</section>

<!-- Rooms Section -->
<section class="py-16 lg:py-24 bg-gray-50" id="rooms" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center max-w-2xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-4">Unit Glamping</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Pilihan Glamping Premium</h2>
            <p class="text-gray-500 leading-relaxed">Tersedia 3 tipe glamping dengan harga mulai Rp650.000 – Rp1.500.000/malam, termasuk sarapan</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" data-stagger="150">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <div class="scroll-reveal scroll-reveal--fade-in-up card-lift group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                <div class="img-zoom relative h-56 lg:h-64 overflow-hidden">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($room['featured_image'])): ?>
                        <img src="<?php echo e(asset('storage/' . $room->featured_image)); ?>" alt="<?php echo e($room->name); ?>" class="w-full h-full object-cover" loading="lazy">
                    <?php else: ?>
                        <div class="w-full h-full bg-gradient-to-br from-emerald-200 to-teal-100 flex items-center justify-center">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-building-office'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-16 h-16 text-emerald-400']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-semibold text-emerald-700">
                        Rp <?php echo e(number_format($room->price_per_night, 0, ',', '.')); ?>/malam
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-emerald-700 transition-colors"><?php echo e($room->name); ?></h3>
                    <p class="text-gray-500 text-sm mb-4 line-clamp-2"><?php echo e(strip_tags($room->description)); ?></p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4 text-sm text-gray-500">
                            <span class="flex items-center">
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                                <?php echo e($room->capacity); ?> Tamu
                            </span>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($room->size_sqm): ?>
                            <span class="flex items-center">
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrows-pointing-out'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                                <?php echo e($room->size_sqm); ?> m²
                            </span>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                    <a href="<?php echo e(route('rooms.show', $room->slug)); ?>" class="btn-press mt-4 w-full inline-flex items-center justify-center px-4 py-2.5 bg-emerald-50 text-emerald-700 rounded-xl hover:bg-emerald-100 transition-colors font-medium text-sm">
                        Detail & Booking
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-chevron-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 ml-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                    </a>
                </div>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            <div class="col-span-full text-center py-12 scroll-reveal scroll-reveal--fade-in">
                <p class="text-gray-400 text-lg">Belum ada kamar tersedia. Silakan kembali lagi nanti.</p>
            </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($rooms) > 0): ?>
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center mt-10">
            <a href="<?php echo e(route('rooms.index')); ?>" class="inline-flex items-center text-emerald-700 font-medium hover:text-emerald-800 transition-colors group">
                Lihat Semua Kamar
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            </a>
        </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section>

<!-- Restaurant & Dining Section -->
<section class="py-16 lg:py-24 bg-white relative overflow-hidden" id="restaurant" data-aos="fade-up">
    
    <div class="absolute top-0 right-0 w-96 h-96 bg-amber-100/40 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-emerald-100/40 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center max-w-3xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
            <span class="inline-flex items-center px-4 py-1.5 bg-amber-100 text-amber-700 rounded-full text-sm font-medium mb-4">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-fire'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1.5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
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
                <img src="<?php echo e(asset('storage/resto/outdor.jpg')); ?>" alt="Outdoor Dining Embun Village" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <span class="inline-flex items-center px-3 py-1.5 bg-white/20 backdrop-blur-md rounded-full text-white text-xs font-medium border border-white/20">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-sun'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3.5 h-3.5 mr-1.5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        Outdoor Dining dengan Pemandangan
                    </span>
                </div>
            </div>

            
            <div class="lg:col-span-2 grid grid-cols-2 lg:grid-cols-1 gap-4 lg:gap-6">
                <div class="relative group rounded-2xl overflow-hidden h-48 lg:h-[13.5rem] img-zoom shadow-lg shadow-amber-900/10">
                    <img src="<?php echo e(asset('storage/resto/dalam%20resto.jpg')); ?>" alt="Restaurant Interior" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="text-xs text-white/80 bg-black/20 backdrop-blur-sm px-2 py-1 rounded-full">Interior Nyaman</span>
                    </div>
                </div>
                <div class="relative group rounded-2xl overflow-hidden h-48 lg:h-[13.5rem] img-zoom shadow-lg shadow-amber-900/10">
                    <img src="<?php echo e(asset('storage/resto/dalam%20resto%202.jpg')); ?>" alt="Restaurant Interior" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
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
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-fire'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-7 h-7 text-white']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-amber-700 transition-colors">Live Seafood</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Ikan gurame, udang, dan kepiting segar langsung dari kolam, diolah dengan bumbu khas Sunda dan pilihan rasa pedas manis gurih.</p>
            </div>

            
            <div class="group card-lift p-6 rounded-2xl bg-gradient-to-br from-emerald-50 to-teal-50 border border-emerald-100 hover:border-emerald-200 hover:shadow-lg hover:shadow-emerald-200/30 transition-all duration-500">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center mb-4 shadow-lg shadow-emerald-200/50 group-hover:scale-110 transition-transform duration-300">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-sparkles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-7 h-7 text-white']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-emerald-700 transition-colors">Masakan Sunda</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Nasi liwet, karedok, pepes ikan, hingga sate maranggi — cita rasa tradisional Sunda yang autentik dari bahan-bahan lokal pilihan.</p>
            </div>

            
            <div class="group card-lift p-6 rounded-2xl bg-gradient-to-br from-sky-50 to-blue-50 border border-sky-100 hover:border-sky-200 hover:shadow-lg hover:shadow-sky-200/30 transition-all duration-500">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-sky-400 to-blue-500 flex items-center justify-center mb-4 shadow-lg shadow-sky-200/50 group-hover:scale-110 transition-transform duration-300">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-sun'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-7 h-7 text-white']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-sky-700 transition-colors">Pemandangan Alam</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Makan malam romantis dengan latar matahari terbenam di balik Waduk Dharma dan Gunung Ciremai yang megah, ditemani udara sejuk pegunungan.</p>
            </div>

            
            <div class="group card-lift p-6 rounded-2xl bg-gradient-to-br from-rose-50 to-pink-50 border border-rose-100 hover:border-rose-200 hover:shadow-lg hover:shadow-rose-200/30 transition-all duration-500">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-rose-400 to-pink-500 flex items-center justify-center mb-4 shadow-lg shadow-rose-200/50 group-hover:scale-110 transition-transform duration-300">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-star'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-7 h-7 text-white']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-rose-700 transition-colors">Menu Spesial</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Signature dish seperti Gurame Bakar Pesmol, Udang Saus Padang, Sop Ikan Nila segar, dan aneka minuman tradisional hangat yang menggugah selera.</p>
            </div>
        </div>

        
    </div>
</section>


<section class="scroll-reveal scroll-reveal--fade-in-up relative w-full h-[60vh] lg:h-[70vh] overflow-hidden group img-zoom shadow-xl" data-aos="fade-up">
    <img src="<?php echo e(asset('storage/resto/makanan.jpg')); ?>" alt="Signature Menu Embun Village" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" loading="lazy">
    
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-black/20"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-black/20"></div>

    
    <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-amber-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 left-1/4 w-48 h-48 bg-orange-500/10 rounded-full blur-3xl"></div>

    <div class="absolute inset-0 flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-2xl">
                <div class="scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up">
                    <span class="inline-flex items-center px-4 py-2 bg-amber-500/20 backdrop-blur-md rounded-full text-amber-300 text-sm font-medium border border-amber-400/30 mb-6">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-sparkles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
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
                    <a href="<?php echo e(route('about')); ?>" class="inline-flex items-center px-7 py-3.5 bg-gradient-to-r from-amber-500 to-orange-600 text-white rounded-xl hover:from-amber-400 hover:to-orange-500 transition-all duration-300 font-semibold text-base shadow-2xl shadow-amber-900/40 btn-press micro-bounce">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-sparkles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        Lihat Menu Lengkap
                    </a>
                    <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center px-7 py-3.5 bg-white/15 backdrop-blur-md text-white rounded-xl hover:bg-white/25 transition-all duration-300 font-medium text-base border border-white/20 btn-press">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 mr-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        Reservasi Meja
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facilities Section -->
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($facilities) > 0): ?>
<section class="py-16 lg:py-24 bg-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center max-w-2xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-4">Fasilitas</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Fasilitas & Wahana</h2>
            <p class="text-gray-500 leading-relaxed">Dari kolam renang, giant swing, hingga live seafood — semua ada di sini!</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6" data-stagger="80">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <div class="scroll-reveal scroll-reveal--scale-in card-lift group text-center p-6 rounded-2xl bg-gray-50 hover:bg-emerald-50 hover:shadow-md transition-all duration-300" data-aos="zoom-in" data-aos-delay="<?php echo e($loop->index * 80); ?>">
                <div class="w-12 h-12 mx-auto mb-3 flex items-center justify-center rounded-xl bg-emerald-100 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($facility->icon): ?>
                        <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => 'heroicon-o-' . $facility->icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-sparkles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                <h4 class="font-medium text-gray-900 text-sm"><?php echo e($facility->name); ?></h4>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<!-- Gallery Section -->
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($galleries) > 0): ?>
<section class="py-16 lg:py-24 bg-gray-50" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center max-w-2xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-4">Galeri</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Galeri Embun Village</h2>
            <p class="text-gray-500 leading-relaxed">Keindahan glamping, restoran, dan wahana dalam satu frame</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" data-stagger="100">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <div class="scroll-reveal scroll-reveal--scale-in img-zoom group relative h-48 lg:h-56 rounded-xl overflow-hidden cursor-pointer" data-aos="zoom-in" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                <img src="<?php echo e(asset('storage/' . $gallery->image)); ?>" alt="<?php echo e($gallery->caption ?? 'Gallery'); ?>" class="w-full h-full object-cover" loading="lazy">
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-colors duration-300"></div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($gallery->caption): ?>
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <p class="text-white text-sm"><?php echo e($gallery->caption); ?></p>
                </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<!-- Testimonials -->
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($testimonials) > 0): ?>
<section class="py-16 lg:py-24 bg-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center max-w-2xl mx-auto mb-12 lg:mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-4">Testimoni</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Apa Kata Tamu</h2>
            <p class="text-gray-500 leading-relaxed">Pengalaman menginap yang dibagikan oleh tamu kami</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" data-stagger="150">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <div class="scroll-reveal scroll-reveal--fade-in-up card-lift p-6 lg:p-8 rounded-2xl bg-gray-50 border border-gray-100 hover:shadow-lg transition-shadow duration-300" data-aos="fade-up" data-aos-delay="<?php echo e($loop->index * 100); ?>">
                <div class="flex items-center mb-4">
                    <div class="flex text-amber-400">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php for($i = 0; $i < 5; $i++): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-star'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 '.e($i < $testimonial->rating ? 'text-amber-400' : 'text-gray-200').'']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed mb-6 italic">"<?php echo e($testimonial->content); ?>"</p>
                <div class="flex items-center space-x-3">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($testimonial->avatar): ?>
                        <img src="<?php echo e(asset('storage/' . $testimonial->avatar)); ?>" alt="<?php echo e($testimonial->name); ?>" class="w-10 h-10 rounded-full object-cover" loading="lazy">
                    <?php else: ?>
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center text-white font-medium">
                            <?php echo e(substr($testimonial->name, 0, 1)); ?>

                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <div>
                        <p class="font-medium text-gray-900"><?php echo e($testimonial->name); ?></p>
                        <p class="text-sm text-gray-400">Tamu Villa</p>
                    </div>
                </div>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<!-- Location Map Section -->
<section class="py-16 lg:py-24 bg-white relative overflow-hidden" data-aos="fade-up">
    
    <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-100/30 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-teal-100/30 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="scroll-reveal scroll-reveal--fade-in-up text-center max-w-2xl mx-auto mb-10" data-aos="fade-up">
            <span class="inline-flex items-center px-4 py-1.5 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-4">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-map-pin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-1.5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                Lokasi
            </span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 font-['Playfair_Display'] mb-4">Temukan Kami</h2>
            <p class="text-gray-500 leading-relaxed">Jl. Dano, Desa Cisantana, Kec. Cigugur, Kab. Kuningan, Jawa Barat 45552</p>
        </div>

        <div class="scroll-reveal scroll-reveal--fade-in-up relative group" data-aos="fade-up">
            
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

            
            <div class="absolute bottom-4 left-4 right-4 lg:bottom-6 lg:left-6 lg:right-auto lg:max-w-xs">
                <div class="bg-white/95 backdrop-blur-md rounded-xl p-4 lg:p-5 shadow-lg border border-emerald-100/60">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center shrink-0">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-map-pin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-emerald-600']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        </div>
                        <div class="min-w-0">
                            <h4 class="font-semibold text-gray-900 text-sm">Embun Sangga Langit</h4>
                            <p class="text-gray-500 text-xs mt-0.5 leading-relaxed">Jl. Dano, Desa Cisantana, Kec. Cigugur, Kuningan 45552</p>
                            <a href="https://maps.google.com/?q=Embun+Sangga+Langit+Kuningan" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-emerald-600 hover:text-emerald-700 text-xs font-medium mt-2 transition-colors">
                                Buka di Google Maps
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-up-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3 h-3 ml-1']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 lg:py-24 text-white relative overflow-hidden bg-fixed bg-cover bg-center" data-aos="fade-up" style="background-image: url('<?php echo e(asset('images/EMBUN/kolam2.jpg')); ?>')">
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/85 via-emerald-800/80 to-teal-800/85 z-[1]"></div>
    <div class="absolute inset-0 opacity-10 z-[1]">
        <div class="absolute top-10 left-10 w-72 h-72 bg-white rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-emerald-300 rounded-full blur-3xl animate-float" style="animation-delay: 2.5s;"></div>
    </div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up">
            <h2 class="text-3xl lg:text-5xl font-bold font-['Playfair_Display'] mb-6">
                Siap untuk Pengalaman <br class="hidden sm:block"/>
                <span class="text-emerald-200">Glamping yang Tak Terlupakan?</span>
            </h2>
        </div>
        <div class="scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up" data-aos-delay="150" data-delay="150">
            <p class="text-lg lg:text-xl text-emerald-100/80 mb-8 max-w-2xl mx-auto">
                Pesan sekarang dan nikmati keindahan alam Embun Sangga Langit di kaki Gunung Ciremai.
                Dapatkan pengalaman glamping dengan harga mulai Rp650.000/malam!
            </p>
        </div>
        <div class="scroll-reveal scroll-reveal--fade-in-up" data-aos="fade-up" data-aos-delay="300" data-delay="300">
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo e(route('rooms.index')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-white text-emerald-800 rounded-xl hover:bg-emerald-50 transition-all duration-300 font-semibold text-lg shadow-xl hover:shadow-2xl btn-press micro-bounce">
                    Pesan Glamping Sekarang
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 ml-2']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                </a>
                <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white rounded-xl hover:bg-white/10 transition-all duration-300 font-medium btn-press">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Mobile: non-fixed background for performance */
    @media (max-width: 768px) {
        .bg-fixed {
            background-attachment: scroll !important;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\webembun\resources\views/home.blade.php ENDPATH**/ ?>
<!-- CTA Section -->
<section class="py-16 lg:py-24 text-white relative overflow-hidden bg-fixed bg-cover bg-center" data-aos="fade-up" style="background-image: url('<?php echo e(asset('images/EMBUN/kolam2.webp')); ?>')">
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
</section><?php /**PATH C:\laragon\www\webembun\resources\views\home\cta.blade.php ENDPATH**/ ?>
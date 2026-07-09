

<?php $__env->startSection('title', 'Booking Berhasil'); ?>

<?php $__env->startSection('content'); ?>
<section class="py-16 lg:py-24">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="scroll-reveal scroll-reveal--scale-in bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-12">
            <!-- Success Icon -->
            <div class="w-20 h-20 mx-auto mb-6 bg-emerald-100 rounded-full flex items-center justify-center">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-check-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-10 h-10 text-emerald-600']); ?>
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

            <h1 class="scroll-reveal scroll-reveal--fade-in-up text-2xl lg:text-3xl font-bold text-gray-900 font-['Playfair_Display'] mb-2">Booking Berhasil!</h1>
            <p class="scroll-reveal scroll-reveal--fade-in-up text-gray-500 mb-8">Terima kasih, pemesanan Anda telah diterima. Kami akan menghubungi Anda untuk konfirmasi.</p>

            <div class="scroll-reveal scroll-reveal--fade-in-up bg-gray-50 rounded-xl p-6 mb-8 text-left">
                <h3 class="font-semibold text-gray-900 mb-4">Detail Pemesanan</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-500">Kode Booking</span>
                        <span class="font-medium text-gray-900">#<?php echo e($booking->id); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Kamar</span>
                        <span class="font-medium text-gray-900"><?php echo e($booking->room->name); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Nama Tamu</span>
                        <span class="font-medium text-gray-900"><?php echo e($booking->guest_name); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Check-in</span>
                        <span class="font-medium text-gray-900"><?php echo e($booking->check_in->format('d M Y')); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Check-out</span>
                        <span class="font-medium text-gray-900"><?php echo e($booking->check_out->format('d M Y')); ?></span>
                    </div>
                    <div class="flex justify-between pt-3 border-t border-gray-200">
                        <span class="text-gray-500">Total</span>
                        <span class="font-bold text-emerald-700">Rp <?php echo e(number_format($booking->total_price, 0, ',', '.')); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Status</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">
                            <?php echo e(ucfirst($booking->status)); ?>

                        </span>
                    </div>
                </div>
            </div>

            <!-- Payment Information -->
            <div class="scroll-reveal scroll-reveal--fade-in-up bg-amber-50 border border-amber-200 rounded-xl p-6 mb-8 text-left">
                <div class="flex items-center gap-2 mb-4">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-banknotes'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-amber-600']); ?>
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
                    <h3 class="font-semibold text-gray-900">Informasi Pembayaran</h3>
                </div>
                <p class="text-sm text-gray-600 mb-3">Silakan lakukan transfer ke rekening berikut untuk konfirmasi pemesanan Anda:</p>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-500">Bank</span>
                        <span class="font-medium text-gray-900">BCA</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Nama Pemilik</span>
                        <span class="font-medium text-gray-900">Hanyen Tenggono</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">No. Rekening</span>
                        <span class="font-mono font-bold text-gray-900 tracking-wider">1341463535</span>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-amber-200">
                    <p class="text-xs text-gray-500">
                        Konfirmasi setelah transfer via WhatsApp:
                        <a href="https://wa.me/6285136907907" target="_blank" class="text-emerald-600 hover:text-emerald-700 font-medium underline">+62 851-3690-7907</a>
                    </p>
                </div>
            </div>

            <div class="scroll-reveal scroll-reveal--fade-in-up flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo e(route('home')); ?>" class="btn-press inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-emerald-600 to-teal-500 text-white rounded-xl hover:from-emerald-700 hover:to-teal-600 transition-all font-medium shadow-lg">
                    Kembali ke Beranda
                </a>
                <a href="<?php echo e(route('rooms.index')); ?>" class="btn-press inline-flex items-center justify-center px-6 py-3 border border-gray-200 text-gray-700 rounded-xl hover:bg-gray-50 transition-all font-medium">
                    Lihat Kamar Lain
                </a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\webembun\resources\views\bookings\success.blade.php ENDPATH**/ ?>
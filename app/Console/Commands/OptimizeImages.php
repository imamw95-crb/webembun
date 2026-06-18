<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:optimize-images')]
#[Description('Convert all JPG/PNG images to WebP for faster page loads')]
class OptimizeImages extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $directories = [
            storage_path('app/public/baner'),
            storage_path('app/public/gallery'),
            storage_path('app/public/hero'),
            storage_path('app/public/logo'),
            storage_path('app/public/resto'),
            storage_path('app/public/rooms'),
            public_path('images/EMBUN'),
        ];

        $converted = 0;
        $skipped = 0;
        $quality = 80;

        foreach ($directories as $dir) {
            if (! is_dir($dir)) {
                $this->warn("Directory not found: {$dir}");

                continue;
            }

            $files = glob($dir.DIRECTORY_SEPARATOR.'*.{'.implode(',', ['jpg', 'jpeg', 'png']).'}', GLOB_BRACE);

            foreach ($files as $file) {
                $info = pathinfo($file);
                $webpPath = $info['dirname'].DIRECTORY_SEPARATOR.$info['filename'].'.webp';

                // Skip if WebP already exists and is newer
                if (file_exists($webpPath) && filemtime($webpPath) >= filemtime($file)) {
                    $skipped++;

                    continue;
                }

                $ext = strtolower($info['extension']);

                if ($ext === 'jpg' || $ext === 'jpeg') {
                    $image = @imagecreatefromjpeg($file);
                } elseif ($ext === 'png') {
                    $image = @imagecreatefrompng($file);
                    imagepalettetotruecolor($image);
                    imagealphablending($image, true);
                    imagesavealpha($image, true);
                } else {
                    continue;
                }

                if (! $image) {
                    $this->warn("Failed to read: {$file}");

                    continue;
                }

                if (imagewebp($image, $webpPath, $quality)) {
                    $originalSize = filesize($file);
                    $webpSize = filesize($webpPath);
                    $saved = $originalSize - $webpSize;
                    $percent = $originalSize > 0 ? round(($saved / $originalSize) * 100) : 0;
                    $this->line("  ✓ {$info['filename']}.{$ext} → .webp  ({$percent}% lebih kecil)");
                    $converted++;
                } else {
                    $this->warn("  ✗ Failed to convert: {$file}");
                }

                imagedestroy($image);
            }
        }

        $this->newLine();
        $this->info("Selesai! {$converted} gambar dikonversi, {$skipped} sudah ada.");

        return static::SUCCESS;
    }
}

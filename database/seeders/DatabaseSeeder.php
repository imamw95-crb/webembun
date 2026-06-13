<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\Room;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Facilities — Embun Sangga Langit actual facilities
        $facilities = [
            ['name' => 'Kolam Renang', 'icon' => 'swatch', 'description' => 'Kolam renang baru dibuka Mei 2026', 'sort_order' => 1],
            ['name' => 'Restoran Live Seafood', 'icon' => 'fire', 'description' => 'Live seafood & masakan khas Sunda', 'sort_order' => 2],
            ['name' => 'Panggung Hiburan', 'icon' => 'musical-note', 'description' => 'Panggung hiburan untuk acara spesial', 'sort_order' => 3],
            ['name' => 'Musala Dome', 'icon' => 'building-library', 'description' => 'Musala unik berbentuk dome', 'sort_order' => 4],
            ['name' => 'Giant Swing', 'icon' => 'arrow-path', 'description' => 'Wahana giant swing single & double', 'sort_order' => 5],
            ['name' => 'Swimming with Flamingo', 'icon' => 'heart', 'description' => 'Paket Flamingo Fun Rp35.000', 'sort_order' => 6],
            ['name' => 'Kolam Ikan', 'icon' => 'circle-stack', 'description' => 'Kolam ikan & spot foto sangkar burung', 'sort_order' => 7],
            ['name' => 'Spot Foto Estetik', 'icon' => 'camera', 'description' => 'Banyak spot foto instagramable', 'sort_order' => 8],
            ['name' => 'High Speed WiFi', 'icon' => 'wifi', 'description' => 'Akses WiFi kecepatan tinggi', 'sort_order' => 9],
            ['name' => 'Agrowisata', 'icon' => 'sun', 'description' => 'Area pertanian organik & agrowisata', 'sort_order' => 10],
            ['name' => 'Parkir Luas & Gratis', 'icon' => 'truck', 'description' => 'Parkir luas, gratis untuk pengunjung restoran', 'sort_order' => 11],
        ];

        foreach ($facilities as $facility) {
            Facility::create($facility);
        }

        // Rooms — Actual glamping types at Embun Sangga Langit
        $rooms = [
            [
                'name' => 'Pine Dome (Pindom)',
                'slug' => 'pine-dome',
                'description' => '<p>Pine Dome adalah unit glamping romantis untuk 2 orang dengan harga terjangkau. Dilengkapi AC, fasilitas kopi/teh/air mineral, kasur hotel nyaman, dan kamar mandi privat di luar unit. Menghadap langsung ke arah Waduk Dharma dengan pemandangan matahari terbenam yang memukau.</p>',
                'price_per_night' => 650000,
                'capacity' => 2,
                'size_sqm' => 20,
                'amenities' => ['AC', 'Kasur Hotel', 'Kopi/Teh/Air Mineral', 'Kamar Mandi Privat (Luar)', 'Pemandangan Waduk Dharma', 'Sunset View'],
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Edelweiss',
                'slug' => 'edelweiss',
                'description' => '<p>Edelweiss adalah unit glamping untuk 4 orang dengan harga menengah. Dilengkapi AC portable, guest amenities lengkap, dan kamar mandi privat di luar unit. Menghadap langsung ke arah Waduk Dharma dengan pemandangan matahari terbenam yang memukau. Cocok untuk keluarga kecil atau grup teman.</p>',
                'price_per_night' => 1100000,
                'capacity' => 4,
                'size_sqm' => 30,
                'amenities' => ['AC Portable', 'Guest Amenities Lengkap', 'Kamar Mandi Privat (Luar)', 'Pemandangan Waduk Dharma', 'Sunset View'],
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Seruni',
                'slug' => 'seruni',
                'description' => '<p>Seruni adalah unit glamping terbaru dan paling premium untuk 4 orang. Dirancang lebih nyaman untuk keluarga dengan kamar mandi di dalam, water heater, Smart TV, AC, dan dua tempat tidur besar. Tipe paling eksklusif di Embun Sangga Langit dengan fasilitas terlengkap.</p>',
                'price_per_night' => 1500000,
                'capacity' => 4,
                'size_sqm' => 40,
                'amenities' => ['AC', 'Smart TV', 'Kamar Mandi di Dalam', 'Water Heater', '2 Tempat Tidur Besar', 'Guest Amenities Premium'],
                'is_featured' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }

        // Testimonials
        $testimonials = [
            [
                'name' => 'Budi Santoso',
                'content' => 'Pengalaman menginap yang luar biasa! Pemandangannya sangat indah, udaranya sejuk, dan pelayanannya ramah. Pasti akan kembali lagi.',
                'rating' => 5,
            ],
            [
                'name' => 'Siti Nurhaliza',
                'content' => 'Villa yang sangat nyaman untuk liburan keluarga. Anak-anak sangat senang dengan kolam renangnya. Recommended!',
                'rating' => 5,
            ],
            [
                'name' => 'Ahmad Rizki',
                'content' => 'Tempat yang sempurna untuk melepas penat. Suasana pegunungan yang tenang membuat pikiran menjadi fresh kembali.',
                'rating' => 4,
            ],
            [
                'name' => 'Dewi Lestari',
                'content' => 'Kamar VIPnya luar biasa! Jacuzzi pribadi dengan pemandangan gunung benar-benar tak terlupakan. Harga sesuai dengan kualitas.',
                'rating' => 5,
            ],
            [
                'name' => 'Rudi Hermawan',
                'content' => 'Makanannya enak-enak, stafnya ramah, tempatnya bersih. Overall pengalaman yang sangat memuaskan.',
                'rating' => 4,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }

        $this->command->info('Database seeded successfully!');
    }
}

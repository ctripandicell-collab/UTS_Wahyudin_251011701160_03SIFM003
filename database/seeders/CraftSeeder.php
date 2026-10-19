<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Craft;

class CraftSeeder extends Seeder
{
    public function run(): void
    {
        Craft::insert([
            [
                'name' => 'Tas Rajut Martchesshop',
                'artisan' => 'Martchesshop',
                'material' => 'Benang Rajut Premium / Katun',
                'price' => 120000,
                'description' => 'Kerajinan tangan rajutan handmade berkualitas dari Martchesshop dengan desain yang unik dan stylish.',
                'image' => 'martchesshop.jpg',
            ],
            [
                'name' => 'Tas Tenun Tradisional',
                'artisan' => 'Ani Lestari',
                'material' => 'Serat Alam & Benang Katun',
                'price' => 150000,
                'description' => 'Tas tenun tangan khas Nusantara dengan motif etnik yang elegan dan kuat.',
                'image' => 'tas_tenun.jpg',
            ],
            [
                'name' => 'Vas Bunga Keramik',
                'artisan' => 'Budi Santoso',
                'material' => 'Tanah Liat / Keramik',
                'price' => 250000,
                'description' => 'Vas keramik buatan tangan dengan glasir antik yang cocok untuk dekorasi rumah.',
                'image' => 'vas_keramik.jpg',
            ],
            [
                'name' => 'Dompet Etnik Kulit',
                'artisan' => 'Siti Rahma',
                'material' => 'Kulit Sapi & Kain Tenun',
                'price' => 95000,
                'description' => 'Dompet lipat kombinasi kulit asli dan sentuhan kain tenun tradisional.',
                'image' => 'dompet_kulit.jpg',
            ],
            [
                'name' => 'Toping Lampu Bambu',
                'artisan' => 'Wahyudi',
                'material' => 'Bambu Pilihan',
                'price' => 180000,
                'description' => 'Lampu hias gantung ruangan yang terbuat darianyaman bambu estetis.',
                'image' => 'lampu_bambu.jpg',
            ],
            [
                'name' => 'Patung Kayu Ukir Jepara',
                'artisan' => 'Supriyadi',
                'material' => 'Kayu Jati',
                'price' => 450000,
                'description' => 'Seni ukir patung tradisional khas Jepara dengan detail pahatan yang sangat halus.',
                'image' => 'patung_kayu.jpg',
            ],
            [
                'name' => 'Gantungan Kunci Makrame',
                'artisan' => 'Dewi Lestari',
                'material' => 'Tali Katun',
                'price' => 25000,
                'description' => 'Aksesoris gantungan kunci buatan tangan menggunakan teknik simpul makrame.',
                'image' => 'gantungan_kunci.jpg',
            ],
            [
                'name' => 'Piring Anyaman Lidi',
                'artisan' => 'Karsinah',
                'material' => 'Lidi Kelapa',
                'price' => 35000,
                'description' => 'Wadah piring tradisional berlapis rotan tipis yang ramah lingkungan.',
                'image' => 'piring_lidi.jpg',
            ],
            [
                'name' => 'Kotak Tisu Rotan Sintetis',
                'artisan' => 'Ahmad Fauzi',
                'material' => 'Rotan Plastik Sintetis',
                'price' => 65000,
                'description' => 'Kotak tempat tisu rajutan rotan sintetis yang tahan air dan mudah dibersihkan.',
                'image' => 'kotak_tisu.jpg',
            ],
            [
                'name' => 'Selimut Rajut Sofa',
                'artisan' => 'Martchesshop',
                'material' => 'Benang Wol Lembut',
                'price' => 275000,
                'description' => 'Selimut rajut hangat dan estetik untuk mempercantik dekorasi sofa ruang tamu Anda.',
                'image' => 'selimut_rajut.jpg',
            ],
        ]);
    }
}
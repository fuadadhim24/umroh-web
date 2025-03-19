<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hajis')->insert([
            [
                'title' => 'Paket Haji Plus',
                'images' => json_encode(["image1.jpg", "image2.jpg"]),
                'visibility' => true,
                'subtitle' => 'Paket eksklusif dengan fasilitas lengkap',
                'keunggulan' => json_encode(["Hotel dekat Masjidil Haram", "Makanan halal premium"]),
                'facilities' => json_encode(["Transportasi VIP", "Pemandu profesional"]),
                'harga_paket' => 150000000,
                'tidak_termasuk' => json_encode(["Pengeluaran pribadi", "Visa tambahan"]),
                'akomodasi' => json_encode(["Hotel bintang 5", "Pesawat kelas bisnis"]),
                'gratis' => json_encode(["Asuransi perjalanan", "Souvenir eksklusif"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Paket Haji Reguler',
                'images' => json_encode(["image3.jpg", "image4.jpg"]),
                'visibility' => true,
                'subtitle' => 'Paket ekonomis dengan fasilitas standar',
                'keunggulan' => json_encode(["Harga terjangkau", "Bimbingan ibadah lengkap"]),
                'facilities' => json_encode(["Transportasi standar", "Hotel nyaman"]),
                'harga_paket' => 90000000,
                'tidak_termasuk' => json_encode(["Pengeluaran pribadi", "Visa tambahan"]),
                'akomodasi' => json_encode(["Hotel bintang 3", "Pesawat kelas ekonomi"]),
                'gratis' => json_encode(["Seminar persiapan haji", "Kit haji"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

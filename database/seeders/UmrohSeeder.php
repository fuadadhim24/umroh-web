<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UmrohSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pakets')->insert([
            [
                'title' => 'Paket Umroh VIP',
                'image' => json_encode(["umroh_vip1.jpg", "umroh_vip2.jpg"]),
                'visibility' => true,
                'short_description' => 'Paket umroh eksklusif dengan fasilitas premium.',
                'price' => 30000000,
                'advantages' => json_encode(["Hotel bintang 5", "Transportasi VIP", "Makanan halal premium"]),
                'facilities' => json_encode(["Penerbangan kelas bisnis", "Bimbingan ibadah", "Ziarah ke tempat bersejarah"]),
                'additional_services' => json_encode(["Laundry gratis", "Pemandu wisata pribadi"]),
                'bonuses' => json_encode(["Kit umroh eksklusif", "Asuransi perjalanan"]),
                'exclusions' => json_encode(["Pengeluaran pribadi", "Visa tambahan jika diperlukan"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Paket Umroh Ekonomis',
                'image' => json_encode(["umroh_eco1.jpg", "umroh_eco2.jpg"]),
                'visibility' => true,
                'short_description' => 'Paket umroh hemat dengan fasilitas standar.',
                'price' => 20000000,
                'advantages' => json_encode(["Harga terjangkau", "Bimbingan ibadah lengkap"]),
                'facilities' => json_encode(["Penerbangan kelas ekonomi", "Akomodasi nyaman"]),
                'additional_services' => json_encode(["Tambahan city tour opsional"]),
                'bonuses' => json_encode(["Tas umroh", "Air zamzam 5L"]),
                'exclusions' => json_encode(["Pengeluaran pribadi", "Transportasi tambahan di luar paket"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

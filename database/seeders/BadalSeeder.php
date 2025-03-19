<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BadalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('badals')->insert([
            [
                'title' => 'Badal Haji Premium',
                'image' => json_encode(["badal1.jpg"]),
                'subtitle' => 'Layanan badal haji dengan fasilitas terbaik',
                'harga_paket' => 25000000,
                'facilities' => json_encode(["Sertifikat badal", "Doa khusus di Tanah Suci", "Dokumentasi ibadah"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Badal Haji Standar',
                'image' => json_encode(["badal2.jpg"]),
                'subtitle' => 'Layanan badal haji ekonomis dan terpercaya',
                'harga_paket' => 15000000,
                'facilities' => json_encode(["Sertifikat badal", "Pelaksanaan sesuai syariat"]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

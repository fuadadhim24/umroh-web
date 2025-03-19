<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artikels')->insert([
            [
                'title' => 'Keutamaan Ibadah Haji',
                'short_description' => 'Menjelaskan berbagai keutamaan dalam melaksanakan ibadah haji.',
                'image' => 'haji_keutamaan.jpg',
                'content' => 'Ibadah haji adalah salah satu rukun Islam yang memiliki banyak keutamaan, di antaranya sebagai bentuk penyempurnaan iman dan kesempatan mendapatkan ampunan dari Allah SWT.',
                'category' => 'Ibadah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tips Persiapan Umroh',
                'short_description' => 'Panduan persiapan sebelum berangkat umroh agar perjalanan lancar.',
                'image' => 'umroh_tips.jpg',
                'content' => 'Sebelum berangkat umroh, ada beberapa hal yang perlu dipersiapkan seperti dokumen perjalanan, kesehatan fisik, serta pengetahuan tentang tata cara ibadah.',
                'category' => 'Panduan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Manfaat Sedekah dalam Islam',
                'short_description' => 'Sedekah memiliki banyak manfaat, baik secara spiritual maupun sosial.',
                'image' => 'sedekah_manfaat.jpg',
                'content' => 'Sedekah tidak hanya membawa berkah bagi yang memberi, tetapi juga membantu meringankan beban sesama dan meningkatkan kesejahteraan masyarakat.',
                'category' => 'Spiritual',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

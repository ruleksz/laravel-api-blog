<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        Berita::create([
            'title' => 'Contoh Berita Pertama',
            'slug' => 'contoh-berita-pertama',
            'content' => 'Ini adalah isi dari berita pertama yang dibuat secara otomatis menggunakan seeder.',
            'image' => null,
        ]);

        Berita::create([
            'title' => 'Update Laravel Production',
            'slug' => 'update-laravel-production',
            'content' => 'Laravel sekarang terhubung dengan Railway dan siap digunakan oleh frontend Next.js.',
            'image' => null,
        ]);
    }
}

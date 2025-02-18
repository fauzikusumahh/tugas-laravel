<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('films')->insert([
            'judul' => Str::random(10),  // Judul film acak dengan 10 karakter
            'ringkasan' => Str::random(50),  // Ringkasan film acak dengan 50 karakter
            'tahun' => rand(2000, 2025),  // Tahun acak antara 2000 hingga 2025
            'poster' => Str::random(10) . '.jpg',  // Nama file poster acak
            'genre_id' => rand(1, 5),  // ID genre acak (asumsi ada 5 genre)
        ]);
    }
}

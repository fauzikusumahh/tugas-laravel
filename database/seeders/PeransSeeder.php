<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PeransSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Asumsi ada 5 film dan 5 cast yang sudah ada di database
        DB::table('perans')->insert([
            [
                'film_id' => rand(1, 5),  // ID film acak antara 1 hingga 5
                'cast_id' => rand(1, 5),  // ID cast acak antara 1 hingga 5
                'nama' => Str::random(10),  // Nama peran acak dengan 10 karakter
            ],
            // Tambahkan data lainnya jika perlu
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    public function run(): void
    {
        $genres = ['Action', 'Comedy', 'Drama', 'Horror', 'Romance'];

        foreach ($genres as $genre) {
            DB::table('genres')->insert([
                'nama' => $genre,
            ]);
        }
    }
}

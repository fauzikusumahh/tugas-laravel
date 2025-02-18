<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,       // Seeder untuk tabel users
            ProfileSeeder::class,    // Seeder untuk tabel profiles
            GenresSeeder::class,     // Seeder untuk tabel genres
            FilmsSeeder::class,      // Seeder untuk tabel films
            CastsSeeder::class,      // Seeder untuk tabel casts
            KritiksSeeder::class,    // Seeder untuk tabel kritiks
            PeransSeeder::class,     // Seeder untuk tabel perans
        ]);
    }
}

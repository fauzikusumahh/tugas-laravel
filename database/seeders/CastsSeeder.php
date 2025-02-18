<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CastsSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('casts')->insert([
                'nama' => $faker->name,
                'umur' => rand(20, 60),
                'bio' => $faker->sentence,
            ]);
        }
    }
}

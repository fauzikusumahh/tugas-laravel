<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KritiksSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = DB::table('users')->pluck('id');
        $filmIds = DB::table('films')->pluck('id');

        foreach (range(1, 30) as $index) {
            DB::table('kritiks')->insert([
                'user_id' => $userIds->random(),
                'film_id' => $filmIds->random(),
                'content' => $faker->paragraph,
                'point' => rand(1, 10),
            ]);
        }
    }
}

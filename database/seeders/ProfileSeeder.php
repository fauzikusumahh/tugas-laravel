<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = DB::table('users')->pluck('id');

        foreach ($userIds as $userId) {
            DB::table('profiles')->insert([
                'umur' => rand(18, 60),
                'bio' => $faker->sentence,
                'alamat' => $faker->address,
                'user_id' => $userId,
            ]);
        }
    }
}

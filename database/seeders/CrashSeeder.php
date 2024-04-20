<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CrashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Insert data into crashes table with date set to year 2024
        for ($i = 0; $i < 5; $i++) {
            DB::table('crashes')->insert([
                'date' => $faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d'),
                'time' => $faker->time(),
                'camera_ubi' => $faker->randomElement(['Location A', 'Location B', 'Location C']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

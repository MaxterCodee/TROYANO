<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DetectionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Insert data into types table
        DB::table('types')->insert([
            ['is_car' => true, 'is_bus' => false, 'is_moto' => false],
            ['is_car' => false, 'is_bus' => true, 'is_moto' => false],
            ['is_car' => false, 'is_bus' => false, 'is_moto' => true],
        ]);

        // Insert data into detections table
        for ($i = 0; $i < 10; $i++) {
            $time = $faker->time('H:i:s');
            $date = $faker->date('Y-m-d', '-10 years');

            DB::table('directions')->insert([
                'time' => $time,
                'date' => DB::raw("'$date'"), // Utilizamos DB::raw() para evitar problemas con el formato de fecha
                'quantity' => $faker->numberBetween(1, 10),
                'type_id' => $faker->numberBetween(1, 3),
            ]);
        }

        // Insert data into crashes table
        for ($i = 0; $i < 5; $i++) {
            DB::table('crashes')->insert([
                'date' => $faker->date(),
                'time' => $faker->time(),
                'camera_ubi' => $faker->randomElement(['Location A', 'Location B', 'Location C']),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++){
         $train = new Train();
         $train->company = $faker->word();
         $train->departure_station = $faker->word();
         $train->arrival_station = $faker->word();
         $train->departure_time = $faker->time();
         $train->arrival_time = $faker->time();
         $train->train_code = $faker->randomNumber(5, true);
         $train->carriages_number = $faker->randomNumber(2, false);
         $train->on_time = $faker->boolean();
         $train->canceled = $faker->boolean();
         $train->save();
        }
    }
}

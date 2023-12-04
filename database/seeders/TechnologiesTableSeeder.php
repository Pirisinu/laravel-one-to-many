<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++) {
            $new_project = new Technology();
            $new_project->name = $faker->name();
            $new_project->description = $faker->text();
            $new_project->save();
        }
    }
}

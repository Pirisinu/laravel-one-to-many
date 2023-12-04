<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use App\Models\Technology;

class FakerProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        $technologies = Technology::all();
        for($i = 0; $i < 20; $i++){
            $new_project = new Project();
            $new_project->technology_id = $technologies->random()->id;
            $new_project->title = $faker->sentence();
            $new_project->description = $faker->text();
            $new_project->start_date = $faker->date();
            $new_project->website_url = $faker->url;
            $new_project->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Front-End',
            'description' => 'Descrizione del Front-End',
        ]);
        DB::table('types')->insert([
            'name' => 'Back-End',
            'description' => 'Descrizione del Back-End',
        ]);
        DB::table('types')->insert([
            'name' => 'Full-Stack',
            'description' => 'Descrizione del Full-Stack',
        ]);
    }
}

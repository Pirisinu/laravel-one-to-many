<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'title' => 'LimProject',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/LimProject'
        ]);

        DB::table('projects')->insert([
            'title' => 'htmlcss-hello',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/htmlcss-hello'
        ]);

        DB::table('projects')->insert([
            'title' => 'html-london-trip',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/html-london-trip'
        ]);

        DB::table('projects')->insert([
            'title' => 'html-css-booleaner',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/html-css-booleaner'
        ]);

        DB::table('projects')->insert([
            'title' => 'html-css-toboolist',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/html-css-toboolist'
        ]);

        DB::table('projects')->insert([
            'title' => 'html-css-float-cards',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/html-css-float-cards'
        ]);

        DB::table('projects')->insert([
            'title' => 'htmlcss-struttura-discord',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/htmlcss-struttura-discord'
        ]);

        DB::table('projects')->insert([
            'title' => 'htmlcss-discord',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/htmlcss-discord'
        ]);

        DB::table('projects')->insert([
            'title' => 'html-css-zoom',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/html-css-zoom'
        ]);

        DB::table('projects')->insert([
            'title' => 'html-css-animation-filter',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/html-css-animation-filter'
        ]);

        DB::table('projects')->insert([
            'title' => 'htmlcss-dropbox',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/htmlcss-dropbox'
        ]);

        DB::table('projects')->insert([
            'title' => 'html-css-resp-wannabe',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/html-css-resp-wannabe'
        ]);

        DB::table('projects')->insert([
            'title' => 'htmlcss-responsive-layout',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/htmlcss-responsive-layout'
        ]);

        DB::table('projects')->insert([
            'title' => 'html-css-spotifyweb',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/html-css-spotifyweb'
        ]);

        DB::table('projects')->insert([
            'title' => 'html-css-bootstrap-freelancer',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/html-css-bootstrap-freelancer'
        ]);

        DB::table('projects')->insert([
            'title' => 'html-css-bootstrap-dashboard',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/html-css-bootstrap-dashboard'
        ]);

        DB::table('projects')->insert([
            'title' => 'human-code',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/human-code'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-pwdgen-wannabe',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-pwdgen-wannabe'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-biglietto-treno',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-biglietto-treno'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-mail-dadi',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-mail-dadi'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-fizzbuzz',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-fizzbuzz'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-array-carousel',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-array-carousel'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-lista-spesa',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-lista-spesa'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-biglietto-treno-form',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-biglietto-treno-form'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-paliedispari',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-paliedispari'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-campominato-grid',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-campominato-grid'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-campominato-dom',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-campominato-dom'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-our-team',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-our-team'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-simon',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-simon'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-array-objects-carousel',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-array-objects-carousel'
        ]);

        DB::table('projects')->insert([
            'title' => 'js-social-posts',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/js-social-posts'
        ]);

        DB::table('projects')->insert([
            'title' => 'vue-hello',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/vue-hello'
        ]);

        DB::table('projects')->insert([
            'title' => 'vue-slider',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/vue-slider'
        ]);

        DB::table('projects')->insert([
            'title' => 'vue-todolist',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/vue-todolist'
        ]);

        DB::table('projects')->insert([
            'title' => 'vue-boolzapp',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/vue-boolzapp'
        ]);

        DB::table('projects')->insert([
            'title' => 'vue-email-list',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/vue-email-list'
        ]);

        DB::table('projects')->insert([
            'title' => 'vite-hello-world',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/vite-hello-world'
        ]);

        DB::table('projects')->insert([
            'title' => 'vite-boolando',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/vite-boolando'
        ]);

        DB::table('projects')->insert([
            'title' => 'vite-yu-gi-oh',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/vite-yu-gi-oh'
        ]);

        DB::table('projects')->insert([
            'title' => 'vite-boolflix',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/vite-boolflix'
        ]);

        DB::table('projects')->insert([
            'title' => 'proj-html-vuejs',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/proj-html-vuejs'
        ]);

        DB::table('projects')->insert([
            'title' => 'php-badwords',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/php-badwords'
        ]);

        DB::table('projects')->insert([
            'title' => 'php-hotel',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/php-hotel'
        ]);

        DB::table('projects')->insert([
            'title' => 'php-strong-password-generator',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/php-strong-password-generator'
        ]);

        DB::table('projects')->insert([
            'title' => 'php-todo-list-json',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/php-todo-list-json'
        ]);

        DB::table('projects')->insert([
            'title' => 'php-oop-1',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/php-oop-1'
        ]);

        DB::table('projects')->insert([
            'title' => 'db-first',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/db-first'
        ]);

        DB::table('projects')->insert([
            'title' => 'db-university',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/db-university'
        ]);

        DB::table('projects')->insert([
            'title' => 'laravel-primi-passi',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/laravel-primi-passi'
        ]);

        DB::table('projects')->insert([
            'title' => 'laravel-boolando',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/laravel-boolando'
        ]);

        DB::table('projects')->insert([
            'title' => 'laravel-model-controller',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/laravel-model-controller'
        ]);

        DB::table('projects')->insert([
            'title' => 'laravel-migration-seeder',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/laravel-migration-seeder'
        ]);

        DB::table('projects')->insert([
            'title' => 'laravel-dc-comics',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/laravel-dc-comics'
        ]);

        DB::table('projects')->insert([
            'title' => 'laravel-auth',
            'description' => 'Descrizione del progetto 1',
            'start_date' => now(),
            'website_url' => 'https://github.com/Pirisinu/laravel-auth'
        ]);



        // Aggiungi più inserimenti per altri progetti se necessario.
    }
}

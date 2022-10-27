<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i < 14; $i++) {
            DB::table('articles')->insert([
                'title' => Str::title('Titre ' . $i),
                'subtitle' => Str::title('Sous titre ' . $i),
                'slug' => Str::slug('slug titre' . $i),
                'content' => $faker->text(500),
            ]);
        }
    }
}
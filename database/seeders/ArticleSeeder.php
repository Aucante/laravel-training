<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Database\Factories\ArticleFactory;
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
        Category::get()->each(function ($category) {
            Article::factory(5)->create([
                'category_id' => $category->id
            ]);
        });

//        $faker = Factory::create();
//
//        for ($i = 1; $i < 14; $i++) {
//            DB::table('articles')->insert([
//                'title' => Str::title('Titre ' . $i),
//                'subtitle' => Str::title('Sous titre ' . $i),
//                'slug' => Str::slug('slug titre' . $i),
//                'content' => $faker->text(4500),
//                'category_id' => Category::inRandomOrder()->first()->id,
//                'created_at' => new \DateTime(),
//                'updated_at' => new \DateTime(),
//            ]);
//        }
    }
}

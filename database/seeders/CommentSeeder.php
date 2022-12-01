<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::get()->each(function ($article) {
            Comment::factory(1)->create([
                'article_id' => $article->id,
                'user_id' => 1
            ]);
        });
    }
}

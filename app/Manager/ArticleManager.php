<?php

namespace App\Manager;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticleManager
{
    public function build(Article $article, ArticleRequest $request)
    {
        $article->title = $request->input('title');
        $article->subtitle = $request->input('subtitle');
        $article->slug = Str::slug($article->title);
        $article->content = $request->input('content');
        $article->save();
    }
}

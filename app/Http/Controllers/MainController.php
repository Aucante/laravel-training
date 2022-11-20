<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function index() {
        return view('articles', [
            'articles' => Article::paginate(5),
            'categories' => Category::all(),
        ]);
    }

    public function show(Article $article) {

        $comments = Comment::where('article_id', $article->id)->get();

        return view('article', [
            'article' => $article,
            'comments' => $comments
        ]);
    }
}

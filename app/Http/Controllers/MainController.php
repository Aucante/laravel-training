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

    public function homepage() {
        return view('home/homepage', [
            'articles' => Article::paginate(5),
            'categories' => Category::all(),
        ]);
    }

    public function index() {
        return view('articles', [
            'articles' => Article::paginate(5),
            'categories' => Category::all(),
        ]);
    }

    public function show(Article $article) {

        $comments = Comment::where('article_id', $article->id)->orderBy('updated_at', 'desc')->get();

        return view('article', [
            'article' => $article,
            'comments' => $comments
        ]);
    }
}

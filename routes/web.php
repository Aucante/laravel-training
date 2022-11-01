<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MainController::class, 'home']);

Route::get('/articles', [MainController::class, 'index'])->name('articles');
Route::get('/article/{article:id}', [MainController::class, 'show'])->name('article');

Auth::routes();

Route::get('/admin/articles', [ArticleController::class, 'index'])->middleware('admin')->name('articles.index');
Route::get('/admin/article/create', [ArticleController::class, 'create'])->middleware('admin')->name('article.create');
Route::post('/admin/article/store', [ArticleController::class, 'store'])->middleware('admin')->name('article.store');

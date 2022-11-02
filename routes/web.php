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
Route::get('/admin/articles/create', [ArticleController::class, 'create'])->middleware('admin')->name('article.create');
Route::post('/admin/articles/store', [ArticleController::class, 'store'])->middleware('admin')->name('article.store');
Route::delete('/admin/articles/{article}/delete', [ArticleController::class, 'delete'])->middleware('admin')->name('article.delete');
Route::get('/admin/articles/{article}/edit', [ArticleController::class, 'edit'])->middleware('admin')->name('article.edit');
Route::put('/admin/articles/{article}/update', [ArticleController::class, 'update'])->middleware('admin')->name('article.update');

<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthGithubController;
use App\Http\Controllers\Auth\AuthGoogleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

//Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/', [MainController::class, 'homepage'])->name('homepage');

Route::get('/articles', [MainController::class, 'index'])->name('articles');
Route::get('/article/{article:slug}', [MainController::class, 'show'])->name('article');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/category/{category:label}', [CategoryController::class, 'show'])->name('category');

Route::post('/comment/{article:id}', [CommentController::class, 'store'])->name('comment.store');
Route::delete('/comment/{comment:id}', [CommentController::class, 'destroy'])->name('comment.destroy');

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/auth/github', [AuthGithubController::class, 'auth'])->name('github.auth');
Route::get('/auth/github/redirect', [AuthGithubController::class, 'redirect'])->name('github.redirect');

Route::get('/auth/google', [AuthGoogleController::class, 'auth'])->name('google.auth');
Route::get('/auth/google/redirect', [AuthGoogleController::class, 'redirect'])->name('google.redirect');

//Route::prefix('user')->middleware('admin')->group(function(){
//    Route::resource('articles', ArticleController::class)->except([
//        'show'
//    ]);
//});

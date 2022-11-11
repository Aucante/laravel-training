<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthGithubController;
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
Route::get('/article/{article:slug}', [MainController::class, 'show'])->name('article');

Auth::routes();

//Route::prefix('admin')->middleware('admin')->group(function(){
//    Route::resource('articles', ArticleController::class)->except([
//        'show'
//    ]);
//});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/auth/github', [AuthGithubController::class, 'auth'])->name('github.auth');
Route::get('/auth/github/redirect', [AuthGithubController::class, 'redirect'])->name('github.redirect');

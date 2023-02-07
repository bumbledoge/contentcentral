<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

Route::get('/dashboard', [ArticleController::class, 'index'])->name('dashboard');

Route::get('/', [ArticleController::class, 'index'])->name('dashboard');

Route::get('article/{id}', [ArticleController::class, 'readArticle'])->name('toTheArticle');


Route::get('create-article', function () {
    return view('create-article');
})->name('create-article');

Route::post('saveArticle', [ArticleController::class, 'createArticle'])->name('saveArticle');


Route::get('welcome', function () {
    return view('welcome');
});

Route::delete('deleteArticle', [ArticleController::class, 'deleteArticle'])->name('deleteArticle');

require __DIR__.'/auth.php';

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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/article/{id}', function ($id) {
    return 'articol cu id'.$id;
});


Route::get('/create-article', function () {
    return view('create-article');
});

Route::post('saveArticle', [ArticleController::class, 'createArticle'])->name('saveArticle');


Route::get('welcome', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

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

Route::get('unauthorized', function () {
    return view('unauthorized');
});






Route::get('welcome', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

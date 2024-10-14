<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/berita/{slug}', [ArticleController::class, 'detail'])->name('berita.detail');
Route::get('/berita/', [ArticleController::class, 'index'])->name('berita');

Route::get('/ppdb', function () {
    return view('ppdb');
});

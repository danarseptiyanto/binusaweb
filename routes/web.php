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

Route::get('/profil-sekolah', function () {
    return view('profil-sekolah');
})->name('profil-sekolah');

Route::get('/jurusan/tkj', function () {
    return view('jurusan-tkj');
})->name('jurusan-tkj');

Route::get('/jurusan/tsm', function () {
    return view('jurusan-tsm');
})->name('jurusan-tsm');

Route::get('/jurusan/dpb', function () {
    return view('jurusan-dpb');
})->name('jurusan-dpb');

Route::get('/jurusan/akt', function () {
    return view('jurusan-akt');
})->name('jurusan-akt');
Route::get('/sambutan-kepsek', function () {
    return view('sambutan-kepsek');
})->name('sambutan-kepsek');

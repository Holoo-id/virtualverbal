<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\BeritaController;


//Route
//Controller
//View

Route::get('/', function () {
    return view('home');
});

Route::get('/berita', [BeritaController::class, 'Berita']);
Route::get('/berita/{slug}', [BeritaController::class, 'LinkBerita']);

Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/search-result', function () {
    return view('search-result');
});

Route::get('/esports', function () {
    return view('esports');
});

Route::get('/gamesdb', function () {
    return view('gamesdb');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/apps', function () {
    return view('videos');
});

Route::get('/komunitas', function () {
    return view('komunitas');
});

Route::get('/shop', function () {
    return view('shop');
});
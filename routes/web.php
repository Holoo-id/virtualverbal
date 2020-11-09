<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Backend\AuthController;


//Route
//Controller
//View

Route::get('/', function () {
    return view('front.home');
});

Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/berita', [BeritaController::class, 'Berita']);
Route::get('/berita/{slug}', [BeritaController::class, 'LinkBerita']);

Route::get('/artikel', function () {
    return view('front.artikel-game');
});
Route::get('/search-result', function () {
    return view('front.search-result');
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

// start backend layouts
Route::get('/dashboard', function () {
    return view('back.dashboard');
});
Route::get('/create-content', function () {
    return view('back.create-content');
});
Route::get('/content-list', function () {
    return view('back.content-list');
});
Route::get('/content-preview', function () {
    return view('back.content-preview');
});
Route::get('/email', function () {
    return view('back.at-email');
});

//start error layout
Route::get('/error-404', function () {
    return view('error.404');
});
Route::get('/error-401', function () {
    return view('error.401');
});
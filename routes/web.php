<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Backend\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


//Route
//Controller
//View

Route::get('/', function () {
    return view('front.home');
})->name('home');

Route::get('/email/verify', function () {
    return view('test');
})->middleware(['auth'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


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

Route::group(['prefix' => 'auth',  'middleware' => 'guest'], function (){
    Route::post('login', [AuthController::class, 'authenticate'])->name('login');
    Route::post('register', [AuthController::class, 'register'])->name('register');
});

Route::get('/test', function () {
    return view('test');
});

// start backend layouts
Route::group(['prefix' => 'back', 'middleware' => 'auth'], function (){
    
    Route::get('dashboard', function () {
        return view('back.dashboard');
    });
    Route::get('create-content', function () {
        return view('back.create-content');
    });
    Route::get('content-list', function () {
        return view('back.content-list');
    });
    Route::get('content-preview', function () {
        return view('back.content-preview');
    });
});

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
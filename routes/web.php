<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Backend\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

//Route
//Controller
//View

// Route::post('/login', [AuthController::class, 'authenticate']);
// Route::get('/logout', [AuthController::class, 'logout']);

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
Route::get('/before-email', function () {
    return view('front.before-email');
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


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return view('auth.after-registration');

})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('email/verification-notification', function (Request $request)
{
    $request->user()->sendEmailVerificationNotification();
    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profil', function () {
    return view('back.profile.profil');
});
Route::get('/reset-password', function () {
    return view('back.profile.reset-password');
});

//start error layout
Route::get('/error-404', function () {
    return view('error.404');
});
Route::get('/error-401', function () {
    return view('error.401');
});

// Mulai Rapih
Route::get('/', function () {
    return view('front.home');
})->middleware(['verified']);

Route::prefix('/front')->group(function () {
    Route::get('/about', function () {
        return view('front.about');
    })->name('about');
});
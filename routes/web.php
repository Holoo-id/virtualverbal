<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\HomeController;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/berita', [BeritaController::class, 'Berita']);
Route::get('/berita/{slug}', [BeritaController::class, 'LinkBerita']);

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




Route::get('/profil', function () {
    return view('back.profile.profil');
});
Route::get('/reset-password', function () {
    return view('back.profile.reset-password');
});

// Mulai Rapih
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware(['verified']);

Route::prefix('/front')->group(function () {
    Route::get('/about', function () {
        return view('front.about');
    })->middleware(['verified'])->name('about');

    Route::prefix('/content')->group(function () {
        Route::get('/all', [ContentController::class, 'all'])->name('all-content');
        Route::get('/detail', [ContentController::class, 'detail']);
    });
});

Route::prefix('/back')->group(function (){
    Route::prefix('/content')->group(function () {
        Route::get('/list', [ContentController::class, 'list']);
        Route::get('/preview', [ContentController::class, 'preview']);
    });
});

// Route untuk verifikasi email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request){
    $request->user()->sendEmailVerificationNotification();
    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return view('auth.after-registration');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verify/{id}/{hash}', [UserController::class, 'finalizeRegister']);
// Route untuk verifikasi email

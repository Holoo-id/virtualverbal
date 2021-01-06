<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('/profil', function () {
    return view('back.profile.profil');
});
Route::get('/reset-password', function () {
    return view('back.profile.reset-password');
});

// Mulai Rapih
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware(['verified','get.live_news']);

Route::prefix('/front')->group(function () {
    Route::get('/about', function () {
        return view('front.about');
    })->middleware(['verified','get.live_news'])->name('about');

    Route::middleware(['verified','get.live_news'])->prefix('/content')->group(function () {
        Route::get('/all', [ContentController::class, 'all'])->name('all-content');
        Route::get('/detail/{permalink}', [ContentController::class, 'detail'])->name('detail');
        Route::get('/search', [ContentController::class, 'search'])->name('search');
    });
});

Route::prefix('/back')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('/content')->group(function () {
        Route::get('/create', [ContentController::class, 'post'])->name('create-content');
        Route::get('/delete/{permalink}', [ContentController::class, 'delete'])->name('delete-content');
        Route::get('/edit/{permalink}', [ContentController::class, 'edit'])->name('edit-content');
        Route::get('/list', [ContentController::class, 'list'])->name('content-list');
        Route::get('/preview/{permalink}', [ContentController::class, 'preview'])->name('preview');
        Route::post('/add', [ContentController::class, 'tambah'])->name('add-content');
        Route::post('/update', [ContentController::class, 'update'])->name('update-content');
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

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request, $id) {
        $request->fulfill();
        $encrypted_id = Crypt::encryptString($id);
        return redirect('/email/verify/'.$encrypted_id);
    })->middleware(['auth', 'signed'])->name('verification.verify');

    Route::get('/email/verify/{encrypted_id}', function(){
        return view('auth.after-registration');
    })->middleware(['auth']);

    Route::post('/email/verify/{encrypted_id}', [UserController::class, 'finalizeRegister']);
// Route untuk verifikasi email

Route::get('/login-by/{driver}', [UserController::class, 'redirectToProvider']);
Route::get('/login-by/{driver}/callback', [UserController::class, 'handleProviderCallback']);
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return auth()->check()
        ? redirect('/dashboard')
        : redirect('/login');
});

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/kategori', function () {
    return view('kategori');
})->middleware(['auth', 'verified'])->name('kategori');

Route::get('/kategori/{slug}', function ($slug) {
    return view('kategori-detail', ['slug' => $slug]);
})->middleware(['auth', 'verified'])->name('kategori.detail');

Route::get('/komunitas', function () {
    return view('komunitas');
})->middleware(['auth', 'verified'])->name('komunitas');

Route::get('/favorites', function () {
    return view('favorites');
})->middleware(['auth', 'verified'])->name('favorites');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/preferences', [ProfileController::class, 'preferences'])->name('profile.preferences');
    Route::post('/profile/avatar', [ProfileController::class, 'avatar'])->name('profile.avatar');
});

// Old one
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

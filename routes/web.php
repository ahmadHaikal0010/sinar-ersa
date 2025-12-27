<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\LandingController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::name('publik.')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('home');
    Route::get('/menu/kuliner', [LandingController::class, 'kuliner'])->name('kuliner');
    Route::get('/menu/oleh-oleh', [LandingController::class, 'olehOleh'])->name('oleh-oleh');
});

Route::get('/tentang', function () {
    return view('public.tentang');
});

Route::get('/kontak', function () {
    return view('public.kontak');
});

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Admin Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/menu', MenuController::class);
    Route::resource('/image', ImageController::class);
    Route::resource('/transaction', TransactionController::class);
});

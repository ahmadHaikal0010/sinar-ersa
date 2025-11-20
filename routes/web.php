<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Halaman utama (welcome)

// Landing Page
Route::get('/', function () {
    return view('public.landing');
});

// Halaman publik
Route::get('/menu', function () {
    return view('public.menu');
});

Route::get('/tentang', function () {
    return view('public.tentang');
});

Route::get('/kontak', function () {
    return view('public.kontak');
});
Route::view('/menu/oleh-oleh', 'menu-oleh-oleh');

// Menu Sarapan
Route::view('/menu/sarapan', 'menu-sarapan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/menu', MenuController::class);
    Route::resource('/image', ImageController::class);
    Route::resource('/transaction', TransactionController::class);
});

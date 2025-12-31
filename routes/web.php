<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\LandingController;
use App\Http\Controllers\Public\PublicMenuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES (USER)
|--------------------------------------------------------------------------
*/
Route::name('publik.')->group(function () {

    // Landing
    Route::get('/', [LandingController::class, 'index'])->name('home');

    // Kategori
    Route::get('/menu/kuliner', [LandingController::class, 'kuliner'])->name('kuliner');
    Route::get('/menu/oleh-oleh', [LandingController::class, 'olehOleh'])->name('oleh-oleh');

    // 🔥 DETAIL MENU (USER)
    Route::get('/menu/{menu}', [PublicMenuController::class, 'show'])
        ->name('menu.show');

    // 🔥 BELI MENU (USER)
    Route::post('/menu/{menu}/beli', [PublicMenuController::class, 'beli'])
        ->name('menu.beli');
});

// Halaman statis
Route::view('/tentang', 'public.tentang');
Route::view('/kontak', 'public.kontak');

/*
|--------------------------------------------------------------------------
| PROFILE (AUTH)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('/menu', AdminMenuController::class);
        Route::resource('/image', ImageController::class);
        Route::resource('/transaction', TransactionController::class);
    });

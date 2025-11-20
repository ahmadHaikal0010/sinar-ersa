<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Halaman utama (welcome)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/kategori', function () {
    return view('pages.kategori');
});

Route::get('/menu', function () {
    return view('pages.menu');
})-> name('pages.menu');
Route::get('/menu/create', function () {
    return view('pages.create_menu');
})->name('create_menu');
Route::get('/menu/edit/{id}', function ($id) {
    return view('pages.edit_menu', compact('id'));
})->name('edit_menu');

Route::get('/transaksi', function () {
    return view('pages.transaksi');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

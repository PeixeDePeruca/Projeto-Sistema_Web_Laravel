<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\HospedeController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'can:admin'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('quartos', QuartoController::class);
    Route::resource('hospedes', HospedeController::class);
    Route::resource('reservas', ReservaController::class);
});

Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth']);

require __DIR__.'/auth.php';
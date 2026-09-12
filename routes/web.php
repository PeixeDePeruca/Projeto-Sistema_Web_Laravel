<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\HospedeController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    return 'Área restrita - Bem-vindo, Administrador!';
})->middleware(['auth', 'role:admin']);

Route::resource('quartos', QuartoController::class);
Route::resource('hospedes', HospedeController::class);
Route::resource('reservas', ReservaController::class);

require __DIR__.'/auth.php';
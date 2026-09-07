<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuartoController; //n fazer a cagada de deletar novamente ;)
use App\Http\Controllers\HospedeController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('quartos', QuartoController::class);
Route::resource('hospedes', HospedeController::class);



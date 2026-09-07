<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuartoController; //n fazer a cagada de deletar novamente ;)


Route::get('/', function () {
    return view('welcome');
});


Route::resource('quartos', QuartoController::class);
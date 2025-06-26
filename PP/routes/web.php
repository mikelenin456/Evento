<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;




Route::get('/', function () {
    return view('welcome');
});

Route::get("profesor/mostrar", [ProfesorController::class,"show"]);

Route::get("profesor/crear", [ProfesorController::class,"crear"]);


Route::get("profesor/modificar", [ProfesorController::class,"edit"]);
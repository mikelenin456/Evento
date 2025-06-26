<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::get('/usuario/mostrar', [UserController::class, 'mostrar']);

Route::get('/usuario/actualizar', [UserController::class, 'actualizar'])->middleware("auth");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});


Route::get('/registrar-admin', 
[RegisterController::class, 'showAdminRegisterForm'])->name('admin.register.form');
Route::post('/registrar-admin', 
[RegisterController::class, 'createAdmin'])->name('admin.register');

Route::middleware(['auth'])->group(function() {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

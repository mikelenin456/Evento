<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirigir raíz al login
Route::get('/', function () {
    return redirect('login');
});

// ======================
// TODO: Autenticación
// ======================
Auth::routes();

// Página principal del usuario autenticado
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ======================
// TODO: Registro de administrador
// ======================
Route::get('/registrar-admin', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register.form');
Route::post('/registrar-admin', [RegisterController::class, 'createAdmin'])->name('admin.register');

// ======================
// TODO: Rutas protegidas (requieren login)
// ======================
Route::middleware(['auth'])->group(function () {

    // ==============
    // TODO: Dashboard administrador
    // ==============
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // ==============
    // TODO: Gestión de eventos (admin)
    // ==============
    Route::get('/admin/eventos', [EventoController::class, 'adminIndex'])->name('admin.eventos.index');
    Route::get('/admin/eventos/crear', [EventoController::class, 'create'])->name('admin.eventos.create');
    Route::post('/admin/eventos', [EventoController::class, 'store'])->name('admin.eventos.store');

    // ==============
    // TODO: Eventos para usuarios
    // ==============
    Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.usuario');

    // ==============
    // TODO: Rutas de usuario
    // ==============
    Route::get('/usuario/mostrar', [UserController::class, 'mostrar']);
    Route::get('/usuario/actualizar', [UserController::class, 'actualizar']);
});


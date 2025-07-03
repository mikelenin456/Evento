<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\InscripcionController;

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

    // Dashboard admin
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Gestión de eventos admin
    Route::get('/admin/eventos', [EventoController::class, 'adminIndex'])->name('admin.eventos.index');
    Route::get('/admin/eventos/crear', [EventoController::class, 'create'])->name('admin.eventos.create');
    Route::post('/admin/eventos', [EventoController::class, 'store'])->name('admin.eventos.store');
    Route::get('/admin/eventos/{evento}/editar', [EventoController::class, 'edit'])->name('admin.eventos.edit');
    Route::put('/admin/eventos/{evento}', [EventoController::class, 'update'])->name('admin.eventos.update');
    Route::delete('/admin/eventos/{evento}', [EventoController::class, 'destroy'])->name('admin.eventos.destroy');
    Route::get('/admin/eventos/{evento}/inscritos', [InscripcionController::class, 'verUsuarios'])->name('admin.eventos.inscritos');

    // Eventos para usuarios
    Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.usuario');

    // Rutas usuario
    Route::get('/usuario/mostrar', [UserController::class, 'mostrar']);
    Route::get('/usuario/actualizar', [UserController::class, 'actualizar']);
    
    // Inscripciones
    Route::get('/inscribirse/{evento_id}', [InscripcionController::class, 'inscribirse'])->name('inscribirse');
    Route::get('/admin/eventos/{evento_id}/usuarios', [InscripcionController::class, 'verUsuarios'])->name('eventos.usuarios');
    Route::get('/mis-inscripciones', [InscripcionController::class, 'misInscripciones'])->name('mis.inscripciones');

});
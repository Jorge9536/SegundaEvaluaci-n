<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// RUTAS PARA EL EXAMEN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Ruta del dashboard (protegida)
Route::get('/dashboard', function () {
    // Verificar si está autenticado
    if (!session('user_authenticated')) {
        return redirect('/login');
    }
    return view('dashboard');
})->name('dashboard');
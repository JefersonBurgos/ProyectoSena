<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ControlarAdministradorController;
use App\Http\Controllers\ControlarEmpleadosController;
use App\Http\Controllers\SuperAdministradorController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\SuperAdminMiddleware;



Route::get('/', function () {
    return redirect('/login');
});

//Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas para usuarios con rol user
Route::middleware([UserMiddleware::class])->group(function () {
    Route::get('/empleado/vista', function () {
        return view('empleado.vista');
    });
});

// Rutas para usuarios con rol admin
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::resource('empleado', EmpleadosController::class);
    Route::resource('calificarEmp', ControlarEmpleadosController::class);
});

// Rutas para usuarios con rol superAdmin
Route::middleware([SuperAdminMiddleware::class])->group(function () {
    Route::resource('superAdministrador', SuperAdministradorController::class);
    Route::resource('administrador', AdministradorController::class);
    Route::resource('calificarAdmin', ControlarAdministradorController::class);
});


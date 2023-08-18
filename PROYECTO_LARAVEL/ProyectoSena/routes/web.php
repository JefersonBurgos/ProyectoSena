<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ControlarAdministradorController;
use App\Http\Controllers\ControlarEmpleadosController;
use App\Http\Controllers\SuperAdministradorController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return redirect('/login');
});

Route::get('/empleado/vista', function () {
    return view('empleado.vista');
});

// Route::get('/calificarEmp/calificar', function () {
//     return view('calificarEmp.calificar');
// });

//Del login
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/welcome', [AuthController::class, 'welcome']);


Route::resource('empleado', EmpleadosController::class);
Route::resource('superAdministrador', SuperAdministradorController::class);
Route::resource('administrador', AdministradorController::class);
Route::resource('calificarAdmin', ControlarAdministradorController::class);
Route::resource('calificarEmp', ControlarEmpleadosController::class);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ControlarAdministradorController;
use App\Http\Controllers\ControlarEmpleadosController;
use App\Http\Controllers\SuperAdministradorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('empleado', EmpleadosController::class);
Route::resource('superAdministrador', SuperAdministradorController::class);
Route::resource('administrador', AdministradorController::class);

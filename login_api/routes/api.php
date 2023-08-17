<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\superAdminController;


 //Route::get('/register', [AuthController::class, 'showRegisterForm']);
 Route::post('/register', [AuthController::class, 'register']);
 //Route::get('/login', [AuthController::class, 'showLoginForm']);
 Route::post('/login', [AuthController::class, 'login']);
 //Route::get('/welcome', [AuthController::class, 'welcome']);

 //Route::get('/admin',[AdminController::class,'index']);

 //Route::get('/superAdmin',[superAdminController::class,'index']);
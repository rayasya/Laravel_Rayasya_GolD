<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [AuthController::class, 'indexLogin']);
Route::post('authLogin', [AuthController::class, 'authLogin'])->name('authLogin');
Route::get('register', [AuthController::class, 'indexRegister']);
Route::post('authRegister', [AuthController::class, 'register'])->name('authRegister');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
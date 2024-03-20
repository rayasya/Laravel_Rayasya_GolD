<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;

Route::redirect('/', '/login');

Route::get('login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('authLogin', [AuthController::class, 'authLogin'])->name('authLogin');
Route::get('register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('authRegister', [AuthController::class, 'authRegister'])->name('authRegister');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('data', [DataController::class, 'index']);
});
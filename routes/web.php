<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

// Halaman utama (harus login untuk akses home)
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Halaman login (hanya bisa diakses oleh yang belum login)
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest'); // Proses login

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Halaman form (hanya untuk user yang sudah login)
Route::get('/form', [FormController::class, 'create'])->middleware('auth');
Route::post('/submit-form', [FormController::class, 'store'])->middleware('auth');

// Halaman profil (hanya untuk user yang sudah login)
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

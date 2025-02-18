<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'index']); // Home page
Route::get('/form', [FormController::class, 'create']); // Form page
Route::get('/profile', [ProfileController::class, 'index']); // Profile page
Route::post('/submit-form', [FormController::class, 'store']); // Store form data
Route::get('/login', [LoginController::class, 'index']); // Login page

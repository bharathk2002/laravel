<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterpageController;

// Show register form
Route::get('/register', [RegisterpageController::class, 'register'])->name('register');

// Handle form submission
Route::post('/register', [RegisterpageController::class, 'registerSubmit'])->name('registers');

// Show register form
Route::get('/login', [RegisterpageController::class, 'login'])->name('login');

// Handle form submission
Route::post('/login', [RegisterpageController::class, 'loginSubmit'])->name('login.submit');

// Protected route example
Route::get('/dashboard', [RegisterpageController::class, 'dashboard'])->middleware('auth')->name('dashboard');

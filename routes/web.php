<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterpageController;
use App\Http\Controllers\ContactpageController;

// Show register form
Route::get('/', [RegisterpageController::class, 'register'])->name('register');

// Handle form submission
Route::post('/register', [RegisterpageController::class, 'registerSubmit'])->name('registers');

// Show register form
Route::get('/login', [RegisterpageController::class, 'login'])->name('login');

// Handle form submission
Route::post('/login', [RegisterpageController::class, 'loginSubmit'])->name('login.submit');

// Protected route example
Route::get('/contact', [ContactpageController::class, 'contact'])->middleware('auth')->name('contact');

// Handle form submission
Route::post('/contact', [ContactpageController::class, 'contactSubmit'])->middleware('auth')->name('contact.submit');

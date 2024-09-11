<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Blog\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);


Route::get('/inscription', [AuthController::class, 'showRegister'])->name('auth.register');
Route::get('/connection', [AuthController::class, 'showLogin'])->name('auth.login');

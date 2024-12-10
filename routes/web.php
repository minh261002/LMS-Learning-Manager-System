<?php

use App\Frontend\Http\Controllers\AuthController;
use App\Frontend\Http\Controllers\HomeController;
use App\Http\Controllers\Ajax\LocationController;
use Illuminate\Support\Facades\Route;

Route::get('/ajax/location', [LocationController::class, 'index'])->name('ajax.location');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dang-nhap', [AuthController::class, 'login'])->name('login');
Route::get('/dang-ky', [AuthController::class, 'register'])->name('register');
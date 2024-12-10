<?php

use App\Frontend\Http\Controllers\HomeController;
use App\Http\Controllers\Ajax\LocationController;
use Illuminate\Support\Facades\Route;

Route::get('/ajax/location', [LocationController::class, 'index'])->name('ajax.location');

Route::get('/', [HomeController::class, 'index'])->name('home');
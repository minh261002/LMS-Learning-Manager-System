<?php

use App\Http\Controllers\Ajax\LocationController;
use Illuminate\Support\Facades\Route;

Route::get('/ajax/location', [LocationController::class, 'index'])->name('ajax.location');

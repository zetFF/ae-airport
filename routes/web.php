<?php
use App\Http\Controllers\AirportController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/airports', [AirportController::class, 'index']);

Route::get('/about', [AboutController::class, 'index'])->name('about');

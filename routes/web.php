<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [HomeController::class, 'index']);

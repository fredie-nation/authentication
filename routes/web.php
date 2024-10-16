<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Frontend
Route::get('/', [AuthController::class, 'auth']);

// Backend
Route::post('/register/proses', [AuthController::class, 'registerProses']);
Route::post('/login/proses', [AuthController::class, 'loginProses']);
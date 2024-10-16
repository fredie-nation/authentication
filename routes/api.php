<?php

use App\Http\Controllers\Api\CobaController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/coba', [CobaController::class, 'index']);
Route::get('/test', [TestController::class, 'index']);

// Catch-all route for non-existent URLs
Route::get('{any}', function () {
    return redirect('/404');
})->where('any', '.*');


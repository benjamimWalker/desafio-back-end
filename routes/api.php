<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('costumers', Controllers\CostumerController::class);
    Route::apiResource('products', Controllers\ProductController::class);
    Route::post('sale', [Controllers\SaleController::class, 'store'])->name('sale.store');
});

Route::post('auth', [Controllers\UserController::class, 'auth'])->name('auth.user');

Route::get('unauthorized', [Controllers\UserController::class, 'unauthorized'])->name('unauthorized');

Route::post('signup', [Controllers\UserController::class, 'signup'])->name('signup');

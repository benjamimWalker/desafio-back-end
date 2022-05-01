<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('costumers', \App\Http\Controllers\CostumerController::class);
Route::apiResource('products', \App\Http\Controllers\ProductController::class);
Route::post('sale', [\App\Http\Controllers\SaleController::class, 'store'])->name('sale.store');

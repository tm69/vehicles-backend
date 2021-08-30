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

Route::middleware('guest')->post('login', \App\Http\Controllers\LoginController::class)->name('login');

Route::middleware('auth:sanctum')->post('logout', \App\Http\Controllers\LogoutController::class)->name('logout');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->prefix('vehicles')->group(function(){
    Route::get('', [\App\Http\Controllers\VehiclesController::class, 'index']);
    Route::post('', [\App\Http\Controllers\VehiclesController::class, 'store']);
});

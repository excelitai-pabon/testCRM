<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
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

// Dashboard Route
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');


// client Route
Route::prefix('client')->group(function(){
    
    // Client Information
    Route::get('/information',[CustomerController::class,'information']);
    Route::get('/viewInformation',[CustomerController::class,'viewInformation']);

    // Client Price Information
    Route::get('/priceInformation',[CustomerController::class,'priceInformation']);
    Route::get('/viewPriceInformation',[CustomerController::class,'viewPriceInformation']);
});
<?php

use App\Http\Controllers\busController;
use App\Http\Controllers\clientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/travelAgency', function () {
    return view('Layouts.defaultDash');
});

Route::prefix('travelAgency')->group(function(){
    Route::resource('/bus',busController::class);
    Route::resource('/client',clientController::class);
    Route::resource('/voyage',voyageController::class);
});


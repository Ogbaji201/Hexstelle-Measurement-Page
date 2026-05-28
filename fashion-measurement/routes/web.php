<?php

// use App\Http\Controllers\MeasurementController;

// Route::get('/', [MeasurementController::class, 'index']);
// Route::post('/submit', [MeasurementController::class, 'submit']);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('measurement');
}); 
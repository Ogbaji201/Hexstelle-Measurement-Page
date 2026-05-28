<?php

use App\Http\Controllers\MeasurementController;

Route::get('/', [MeasurementController::class, 'index']);
Route::post('/submit', [MeasurementController::class, 'submit']);
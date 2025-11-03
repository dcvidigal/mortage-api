<?php

use App\Http\Controllers\MortgageController;
use Illuminate\Support\Facades\Route;

Route::middleware(\App\Http\Middleware\ApiTokenAuth::class)->group(function () {
    Route::post('/mortgage/calculate', [MortgageController::class, 'calculate']);
    Route::post('/mortgage/amortization-schedule', [MortgageController::class, 'amortizationSchedule']);
    Route::post('/mortgage/calculate-spread', [MortgageController::class, 'calculateWithSpread']);
    Route::post('/mortgage/export', [MortgageController::class, 'export']);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::middleware('tenant')->group(function() {
    Route::get('/services', [ServiceController::class, 'index'])->name('tenant.services.index');
    Route::get('/services/{service}', [ServiceController::class, 'show'])->name('tenant.services.show');
});
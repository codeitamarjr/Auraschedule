<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;

Route::middleware('auth')->group(function () {
    Route::get('/upgrade-to-business', [BusinessController::class, 'showUpgradeForm'])->name('business.upgrade');
    Route::post('/upgrade-to-business', [BusinessController::class, 'upgrade'])->name('business.upgrade');
    Route::get('/business', [BusinessController::class, 'edit'])->name('business.edit');
    Route::patch('/business', [BusinessController::class, 'update'])->name('business.update');
    Route::delete('/business', [BusinessController::class, 'destroy'])->name('business.destroy');
});

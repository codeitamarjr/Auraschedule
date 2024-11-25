<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;

Route::get('/upgrade-to-business', [BusinessController::class, 'showUpgradeForm'])->name('business.upgrade');
Route::post('/upgrade-to-business', [BusinessController::class, 'upgrade'])->name('business.upgrade');
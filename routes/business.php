<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CheckoutController;

Route::middleware('auth')->group(function () {
    Route::get('/upgrade-to-business', [BusinessController::class, 'showUpgradeForm'])->name('business.upgrade');
    Route::post('/upgrade-to-business', [BusinessController::class, 'store'])->name('business.store');
    Route::get('/business', [BusinessController::class, 'edit'])->name('business.edit');
    Route::patch('/business', [BusinessController::class, 'update'])->name('business.update');
    Route::delete('/business', [BusinessController::class, 'destroy'])->name('business.destroy');

    Route::get('/business/subscription', [BusinessController::class, 'showSubscription'])->name('business.subscription');
    Route::get('/business/checkout/{plan?}', CheckoutController::class)->name('business.checkout');
    Route::get('/business/success', [BusinessController::class, 'showSuccess'])->name('subscription.success');
    Route::get('/business/cancel', [BusinessController::class, 'showCancel'])->name('subscription.cancel');
});

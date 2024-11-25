<?php

use Inertia\Inertia;
use App\Models\Tenant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
use Spatie\Multitenancy\Contracts\IsTenant;

Route::get('/', function () {

    $tenant = (app(IsTenant::class)::current());

    if (app(IsTenant::class)::current()) {
        // If a tenant exists, show the tenant's service page
        $tenant = Tenant::where('id', $tenant->id)->with('user', 'services')->first();
        return Inertia::render('Tenant/Services', [
            'services' => $tenant->services,
            'tenant' => $tenant,
            'ownerName' => $tenant->user->name,
        ]);
    }

    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/dashboard', function () {
    $user = Auth::user();
    return Inertia::render('Dashboard',[
        'isBusinessAccount' => $user->business_account,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/business.php';
require __DIR__ . '/tenant.php';

<?php

use Inertia\Inertia;
use App\Models\Tenant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Spatie\Multitenancy\Contracts\IsTenant;

Route::get('/', function () {
    $tenant = app(IsTenant::class)::current();

    if ($tenant) {
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
        'totalUsers' => \App\Models\User::count() + 50,
    ]);
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'isBusinessAccount' => auth()->user()->business_account,
        'isSubscribed' => auth()->user()->subscribed('prod_RIRj2SHTliuf4P'),
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

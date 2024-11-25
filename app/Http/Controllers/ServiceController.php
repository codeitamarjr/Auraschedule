<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Spatie\Multitenancy\Contracts\IsTenant;

class ServiceController extends Controller
{
    public function index()
    {
        $tenant = app(IsTenant::class)::current(); // Fetch the current tenant
        if (!$tenant) {
            abort(404, 'Tenant not found');
        }

        $services = $tenant->services; // Assuming the Tenant model has a 'services' relationship

        return inertia('Tenant/Services', [
            'services' => $services,
            'tenant' => $tenant,
        ]);
    }

    public function show(Service $service)
    {
        return response()->json($service);
    }
}

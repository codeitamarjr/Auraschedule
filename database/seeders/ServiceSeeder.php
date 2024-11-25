<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenants = Tenant::all();


        foreach ($tenants as $tenant) {
            Service::factory(5)->create([
                'tenant_id' => $tenant->id,
            ]);
        }
    }
}

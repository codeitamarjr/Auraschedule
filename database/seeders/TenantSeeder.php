<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\User;
use App\Models\Tenant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $businesses = Business::all();

        foreach ($businesses as $business) {
            Tenant::factory(1)->create([
                'business_id' => $business->id,
            ]);
        }
    }
}

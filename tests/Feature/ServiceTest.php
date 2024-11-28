<?php

namespace Tests\Feature;

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_service_creation()
    {
        $service = Service::factory()->create([
            'name' => 'Deep Tissue Massage + Hot Towels',
            'description' => 'A relaxing deep tissue massage with hot towels for comfort.',
            'duration' => '1 hr',
            'price' => 130.00,
        ]);

        $this->assertDatabaseHas('services', [
            'name' => 'Deep Tissue Massage + Hot Towels',
            'price' => 130.00,
        ]);
    }
}

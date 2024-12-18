<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tenant_id' => Tenant::factory(),
            'uuid' => $this->faker->uuid,
            'name' => $this->faker->sentence(5),
            'description' => $this->faker->paragraph(),
            'duration' => $this->faker->randomElement([60, 90, 120]), // Random duration between 60, 90, 120
            'price' => $this->faker->randomFloat(2, 90, 150), // Random price between 90 and 150
        ];
    }
}

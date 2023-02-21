<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Households>
 */
class HouseholdsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'province' => 'NCR',
            'city' => 'Kodego',
            'barangay' => 'SP404',
            'zone_id' => fake()->numberBetween($min = 1, $max = 7),
            'street_address' => fake()->streetAddress(),
            'ownership_status' => fake()->randomElement(['Owned', 'Rented', 'Leased']),
            'dwelling_type' => fake()->randomElement(['Light Materials', 'Concrete']),
            'water_source' => fake()->randomElement(['Faucet', 'Deep Well']),
            'lighting_source' => 'Electric',
            'toilet_type' => 'Water Sealed'
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarangayOfficials>
 */
class BarangayOfficialsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'resident_id' => fake()->numberBetween($min = 1, $max = 40),
            'role' => 'Kagawad',
            'term_start' => '2018-06-30',
            'term_end' => '',
        ];
    }
}

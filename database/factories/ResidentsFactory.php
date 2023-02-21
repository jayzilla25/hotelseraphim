<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Residents>
 */
class ResidentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'last_name' => fake()->lastName(),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->lastName(),
            'suffix' => '',
            'b_date' => fake()->dateTimeBetween($startDate = '-50 years', $endDate = 'now', $timezone = null),
            'b_place' => 'SP404, Kodego, NCR',
            'gender' => fake()->randomElement(['male', 'female']),
            'religion' => fake()->randomElement(['Roman Catholic', 'Roman Catholic', 'Roman Catholic', 'Iglesia Ni Cristo']),
            'nationality' => 'Filipino',
            'citizenship' => 'Filipino',
            'civil_status' => fake()->randomElement(['Single', 'Married', 'Separated', 'Widowed']),
            'blood_type' => fake()->randomElement(['O', 'A', 'B', 'AB']),
            'has_philhealth' => fake()->boolean(),
            'occupation' => fake()->jobTitle(),
            'employment_status' => fake()->randomElement(['Unemployed', 'Regular', 'Contractual']),
            'monthly_income' => fake()->numberBetween($min = 10, $max = 300)*100,
            'educational_attainment' => fake()->randomElement(['College Graduate', 'College Undergraduate', 'Highschool Graduate', 'Elementary Graduate']),
            'former_address' => '',
            'household_id' => fake()->numberBetween($min = 1, $max = 12),
            'relation_to_head' => fake()->randomElement(['Head', 'Wife', 'Son', 'Daughter']),
            'user_id' => '0',
            'contact_email' => fake()->unique()->safeEmail(),
            'contact_phone' => fake()->phoneNumber(),
        ];
    }
}

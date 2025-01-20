<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['$50,000 USD', '$60,000 USD', '$70,000 USD', '$80,000 USD', '$180,000 USD'  ]),
            'location' => 'remote',
            'schedule' => 'Full Time',
            'url' => fake()->url(),
            'featured' => 'false',
        ];
    }
}

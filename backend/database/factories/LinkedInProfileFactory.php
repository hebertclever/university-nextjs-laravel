<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LinkedInProfile>
 */
class LinkedInProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'profile_url' => $this->faker->url(),             // Placeholder LinkedIn profile URL
            'user_id' => $this->faker->numberBetween(1, 1000), // Placeholder user ID
        ];
    }
}

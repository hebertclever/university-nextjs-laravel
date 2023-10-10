<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Log>
 */
class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'action' => $this->faker->word(),                 // Placeholder log action
            'description' => $this->faker->sentence(),       // Placeholder log description
            'user_id' => $this->faker->numberBetween(1, 1000), // Placeholder user ID
        ];
    }
}

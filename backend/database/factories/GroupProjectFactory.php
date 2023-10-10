<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupProject>
 */
class GroupProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_name' => $this->faker->words(3, true),    // Placeholder project name
            'description' => $this->faker->sentence(),        // Placeholder project description
            'deadline' => $this->faker->date(),               // Placeholder deadline date
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentGroup>
 */
class StudentGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'group_name' => $this->faker->words(3, true),    // Placeholder group name
            'description' => $this->faker->sentence(),       // Placeholder group description
        ];
    }
}

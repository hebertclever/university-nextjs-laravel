<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Class>
 */
class ClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'class_name' => $this->faker->words(3, true),    // Placeholder class name
            'teacher_id' => $this->faker->numberBetween(1, 1000), // Placeholder teacher ID
            'course_id' => $this->faker->numberBetween(1, 1000),  // Placeholder course ID
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassEnrollment>
 */
class ClassEnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => $this->faker->numberBetween(1, 1000),  // Placeholder student ID
            'class_id' => $this->faker->numberBetween(1, 1000),    // Placeholder class ID
            'enrollment_date' => $this->faker->date(),             // Placeholder enrollment date
        ];
    }
}

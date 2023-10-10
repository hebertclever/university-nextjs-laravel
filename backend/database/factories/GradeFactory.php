<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
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
            'course_id' => $this->faker->numberBetween(1, 1000),   // Placeholder course ID
            'grade_value' => $this->faker->randomFloat(2, 0, 100), // Placeholder grade value
        ];
    }
}

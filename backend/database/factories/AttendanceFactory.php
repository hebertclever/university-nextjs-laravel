<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
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
            'attendance_date' => $this->faker->date(),             // Placeholder attendance date
            'status' => $this->faker->randomElement(['present', 'absent', 'late']), // Attendance status
        ];
    }
}

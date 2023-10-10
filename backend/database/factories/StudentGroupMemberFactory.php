<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentGroupMember>
 */
class StudentGroupMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => $this->faker->numberBetween(1, 1000), // Placeholder student ID
            'group_id' => $this->faker->numberBetween(1, 1000),   // Placeholder group ID
            'role' => $this->faker->randomElement(['leader', 'member']) // Role in the group
        ];
    }
}

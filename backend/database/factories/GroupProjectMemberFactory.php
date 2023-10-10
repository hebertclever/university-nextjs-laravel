<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupProjectMember>
 */
class GroupProjectMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'member_id' => $this->faker->numberBetween(1, 1000),  // Placeholder member ID
            'project_id' => $this->faker->numberBetween(1, 1000), // Placeholder project ID
            'role' => $this->faker->randomElement(['leader', 'member']), // Role in the project
        ];
    }
}

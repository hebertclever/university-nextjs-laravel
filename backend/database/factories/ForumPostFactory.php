<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ForumPost>
 */
class ForumPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->paragraph(),            // Placeholder post content
            'user_id' => $this->faker->numberBetween(1, 1000), // Placeholder user ID
            'forum_id' => $this->faker->numberBetween(1, 1000), // Placeholder forum ID
        ];
    }
}

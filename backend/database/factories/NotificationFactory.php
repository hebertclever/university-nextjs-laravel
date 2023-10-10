<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),              // Placeholder notification title
            'body' => $this->faker->text(),                   // Placeholder notification body
            'recipient_id' => $this->faker->numberBetween(1, 1000), // Placeholder recipient ID
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(20),
            'content' => $this->faker->paragraph(50),
            'status' => false,
            'image' => 'default-image.jpg',
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ];
    }
}

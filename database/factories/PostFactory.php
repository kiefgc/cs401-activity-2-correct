<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(5);
        $status = fake()->randomElement(['D', 'P', 'I']);
        return [
            'title' => $title,
            'content' => fake()->paragraph(),
            'slug' => Str::slug($title),
            'publication_date' => $status === 'P' ? now() : null,
            'status' => $status,
            'featured_image_url' => fake()->imageUrl(640, 480, 'animals', true),
            'last_modified_date' => now(),
            'views_count' => fake()->numberBetween(0, 1000)
        ];
    }
}

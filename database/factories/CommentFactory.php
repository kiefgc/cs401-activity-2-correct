<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment_content' => $this->faker->paragraph(),
            'comment_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'reviewer_name'=> $this->faker->name(),
            'reviewer_email'=> $this->faker->safeEmail(),
            'is_hidden' => $this->faker->boolean(30)
        ];
    }
}

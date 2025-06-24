<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fileName = $this->faker->lexify('file_??????');
        $fileExtension = $this->faker->fileExtension();
        $fullName = $fileName . '.' . $fileExtension;

        return [
            'file_name' => $fullName,
            'file_type' => $fileExtension,
            'file_size' => $this->faker->numberBetween(100, 5000),
            'url' => $this->faker->url(),
            'upload_date' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'description' => $this->faker->sentence()
        ];
    }
}
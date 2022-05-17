<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'description' => $this->faker->sentence,
            'status' => $this->faker->boolean,
            'content' => $this->faker->text,
            'views' => $this->faker->numberBetween('1', '1000'),
            'image' => $this->faker->imageUrl('1024', '768'),
        ];
    }
}
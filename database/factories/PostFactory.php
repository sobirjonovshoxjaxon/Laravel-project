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
    public function definition(): array
    {

        return [
            'title' => $title = fake()->sentence(3),
            'image' => "{{ asset ('assets/img/feature.jpg')}}",
            'short_content' => fake()->sentence(14),
            'content' => fake()->paragraph(5),
            'slug' => \Str::slug($title),
        ];
    }
}

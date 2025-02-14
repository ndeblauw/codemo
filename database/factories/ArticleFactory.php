<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->realTextBetween(20, 50, 1),
            'content' => $this->faker->realTextBetween(500, 800, 2),
            'author_id' => $this->faker->numberBetween(1, 10),
            'is_public' => $this->faker->boolean(80),
        ];
    }
}

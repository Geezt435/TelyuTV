<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title'      => $this->faker->sentence(),
            'textfill'       => $this->faker->paragraphs(rand(2, 5), true),
            'thumbimg'   => rand(0, 1) ? $this->faker->imageUrl(640, 480, 'post') : null,
            'date'       => $this->faker->date(),
            'likes'      => rand(0, 250),
        ];
    }
}

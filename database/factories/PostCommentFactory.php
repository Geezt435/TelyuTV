<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PostComment;

class PostCommentFactory extends Factory
{
    protected $model = PostComment::class;

    public function definition(): array
    {
        return [
            'text'  => $this->faker->sentence(rand(8, 20)),
            'likes' => rand(0, 40),
            'date'  => $this->faker->date(),
        ];
    }
}

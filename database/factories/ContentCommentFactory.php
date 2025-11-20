<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentCommentFactory extends Factory
{
    public function definition()
    {
        return [
            'text' => $this->faker->sentence(12),
            'likes' => $this->faker->numberBetween(0, 50),
            'date' => $this->faker->date(),
        ];
    }
}

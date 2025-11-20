<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'views' => $this->faker->numberBetween(0, 5000),
            'description' => $this->faker->paragraph(),
            'thumbimg' => null,
            'date' => $this->faker->date(),
        ];
    }
}

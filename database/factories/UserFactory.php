<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'bio' => $this->faker->sentence(10),
            'join_date' => $this->faker->date(),
            'location' => $this->faker->city(),
            'email_notify' => $this->faker->boolean(),
            'dark_mode' => $this->faker->boolean(),
            'adult_content' => $this->faker->boolean(),
            'language' => 'id',
            'avatar' => null,
        ];
    }
}

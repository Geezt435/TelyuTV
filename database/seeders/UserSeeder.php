<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // admin or test account
        User::create([
            'fullname' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'bio' => "The overseer of TelyuTV.",
            'join_date' => now(),
            'location' => 'Indonesia',
            'email_notify' => true,
            'dark_mode' => true,
            'adult_content' => false,
            'language' => 'id',
            'avatar' => null,
        ]);

        // 10 random users
        User::factory()
            ->count(10)
            ->create();
    }
}

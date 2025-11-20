<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Post::factory()
                ->count(20)
                ->create([
                    'user_id' => $user->id,
                ]);
        }
    }
}

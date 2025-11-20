<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\PostComment;

class PostCommentSeeder extends Seeder
{
    public function run(): void
    {
        $posts = Post::all();
        $users = User::all();

        foreach ($posts as $post) {
            PostComment::factory()
                ->count(rand(2, 8))
                ->create([
                    'post_id' => $post->id,
                    'user_id' => $users->random()->id,
                ]);
        }
    }
}

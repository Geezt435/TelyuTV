<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;
use App\Models\User;
use App\Models\ContentComment;

class ContentCommentSeeder extends Seeder
{
    public function run(): void
    {
        $contents = Content::all();
        $users = User::all();

        foreach ($contents as $content) {
            ContentComment::factory()
                ->count(rand(2, 8))
                ->create([
                    'content_id' => $content->id,
                    'user_id' => $users->random()->id,
                ]);
        }
    }
}

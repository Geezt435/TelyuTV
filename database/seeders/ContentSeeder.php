<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;
use App\Models\User;
use App\Models\Category;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $categories = Category::all();

        Content::factory()
            ->count(20)
            ->create([
                'user_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
            ]);
    }
}

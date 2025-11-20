<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'MusicTV', 'description' => 'Temukan konser live, video musik, dan wawancara eksklusif dengan artis favorit.', 'favicon_logo' => 'music'],
            ['name' => 'FoodTV', 'description' => 'Saksikan acara memasak, tutorial resep, dan ulasan makanan lezat dari koki-koki.', 'favicon_logo' => 'utensils'],
            ['name' => 'StudyTV', 'description' => 'Akses materi pembelajaran, webinar, dan tips belajar dari para ahli di berbagai bidang.', 'favicon_logo' => 'book'],
            ['name' => 'GamesTV', 'description' => 'Nikmati streaming game, ulasan game terbaru, dan turnamen e-sports dengan antusiasme tinggi.', 'favicon_logo' => 'gamepad-2'],
            ['name' => 'MoviesTV', 'description' => 'Tonton film-film pilihan, dokumenter, dan serial TV terbaru yang menarik dan seru.', 'favicon_logo' => 'film'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}

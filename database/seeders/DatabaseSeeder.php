<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Project::factory()->create([
            'title' => 'Si Komik',
            'description' => 'This app is build into all platforms including Android, iOS, Windows, and Web',
            'url_headline_image' => null,
            'url_links' => [["url" => "https://sikomik.ddg.my.id", "title" => "SiKomik Website"], ["url" => "https://github.com/sempatpanick/sikomik", "title" => "Github Repository"]],
            'url_images' => ["assets/images/sikomik-1.png", "assets/images/sikomik-2.png", "assets/images/sikomik-3.png", "assets/images/sikomik-4.png", "assets/images/sikomik-5.png", "assets/images/sikomik-6.png"],
            'is_active' => true,
        ]);
    }
}

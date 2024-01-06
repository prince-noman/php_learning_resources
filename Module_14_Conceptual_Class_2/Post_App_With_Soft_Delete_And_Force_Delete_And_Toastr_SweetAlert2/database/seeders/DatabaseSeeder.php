<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        for($i=0;$i<10;$i++){
            \App\Models\Post::create([
                'title' => fake()->sentence(),
                'description' => fake()->text(),
                'category' => fake()->randomElement(['Fashion', 'Programming']),
                'status' => 'Published',
                'featured_image' => fake()->imageUrl(),
                'tags' => ['PHP', 'Laravel', 'HTML']
            ]);
        }
    }
}
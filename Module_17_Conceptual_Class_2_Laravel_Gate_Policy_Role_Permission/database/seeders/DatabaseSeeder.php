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
         //Role Table  Seeder
         \App\Models\Role::factory()->create([
            'name' => 'Admin',
        ]);
        \App\Models\Role::factory()->create([
            'name' => 'Editor',
        ]);
        \App\Models\Role::factory()->create([
            'name' => 'User',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => '123',
            'role_id' => 1
        ]);
        \App\Models\User::factory()->create([
            'name' => 'editor',
            'email' => 'editor@test.com',
            'password' => '123',
            'role_id' => 2
        ]);
        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => '123',
            'role_id' => 3
        ]);
        $this->call(TaskSeeder::class);
    }
}
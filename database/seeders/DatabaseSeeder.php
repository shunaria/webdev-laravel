<?php

namespace Database\Seeders;

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
        // Create main user with ID 1
        $user = User::factory()->create([
            'id' => 1,
            'name' => 'Laury',
            'email' => 'Laury@example.com',
        ]);

        // Create 5 projects for user with ID 1
        \App\Models\Project::factory(5)->create([
            'user_id' => $user->id
        ]);

        // Create 5 nama models for user with ID 1
        \App\Models\NamaModel::factory(5)->create([
            'user_id' => $user->id
        ]);
    }
}

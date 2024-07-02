<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => Hash::make('test@example.com'),
        //     'cluster' => 'cl_1'
        // ]);

        // User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('admin@admin.com'),
        //     'cluster' => 'cl_2'
        // ]);

        $statuses = ['pending', 'done', 'approved'];

        $data = [
            [
                'title' => fake()->name,
                'description' => fake()->text,
                'date' => fake()->date('Y_m_d'),
                'status' => fake()->randomElement($statuses)
            ],
            [
                'title' => fake()->name,
                'description' => fake()->text,
                'date' => fake()->date('Y_m_d'),
                'status' => fake()->randomElement($statuses)
            ],
            [
                'title' => fake()->name,
                'description' => fake()->text,
                'date' => fake()->date('Y_m_d'),
                'status' => fake()->randomElement($statuses)
            ]

        ];

        Post::on('cluster')
            ->insert($data);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Project::create([
            'title' => 'Personal Page',
            'description' => 'A Webpage that could see my project ideas and already finished projects',
            'github_link' => 'https://github.com/Maduks456/personal_page',
        ]);
        User::create([
            'name'=> 'Maduks',
            'email'=>'maduks@gmail.com',
            'password'=> '#ilovecats456'
        ]);
    }
}

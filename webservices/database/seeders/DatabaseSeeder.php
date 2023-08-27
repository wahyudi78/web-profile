<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\About;
use App\Models\Project;
use App\Models\School;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        About::factory(1)->create();
        Project::factory(10)->create();
        School::factory(4)->create();
        Skill::factory(6)->create();
        User::factory(1)->create();

    }
}

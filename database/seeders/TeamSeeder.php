<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\User;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create the Super Administrator team
        $team = Team::create([
            'user_id' => 1, // Assuming user ID 1 is the admin user created earlier
            'name' => 'Super Administrator',
            'personal_team' => false, // Set to false if this is not a personal team
        ]);

        // Associate user ID 1 with the Super Administrator team
        $team->users()->attach(1, ['role' => 'admin']); // Adding user 1 with admin role
    }
}
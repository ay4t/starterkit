<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Team;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create the user and set the current_team_id to the Super Administrator team
        $user = User::create([
            'name' => 'Ayatulloh Ahadr R',
            'email' => 'indiega.net@gmail.com',
            'password' => bcrypt('password'), // Hash the password
        ]);

        // Assuming the Super Administrator team has an ID of 1
        $user->current_team_id = 1; // Set current team to the Super Administrator team
        $user->save();
    }
}
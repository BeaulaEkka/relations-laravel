<?php

namespace Database\Seeders;

use App\Models\Phone;
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

        User::factory(20)->create()->each(function ($user) {
            Phone::factory()->create(['user_id' => $user->id]);
        });
    }
}
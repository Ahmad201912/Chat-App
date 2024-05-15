<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
           'password' => bcrypt('123'),

        ]);


        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123'),
        ]);

        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => bcrypt('123'),
        ]);
    }
}

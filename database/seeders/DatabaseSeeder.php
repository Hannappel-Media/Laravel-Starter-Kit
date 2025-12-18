<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Live\AdminSeeder;
use Database\Seeders\Live\PermissionSeeder;
use Database\Seeders\Live\RoleSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Standard Seeders (Live & Development)
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            AdminSeeder::class,

            // Add more if needed
        ]);

        // Development Seeders
        if (app()->environment('local', 'development')) {
            $this->call([
                // Add seeders for development here
            ]);
        }
    }
}

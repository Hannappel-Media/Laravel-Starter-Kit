<?php

namespace Database\Seeders\Live;

use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions

        // Update the cache to let it know about the newly created permissions (required if you are using WithoutModelEvents trait)
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

    }
}

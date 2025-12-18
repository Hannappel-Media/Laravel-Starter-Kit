<?php

namespace Database\Seeders\Live;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles & assign permissions
        Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());

        Role::create(['name' => 'moderator'])
            ->givePermissionTo([

            ]);

        Role::create(['name' => 'member'])
            ->givePermissionTo([

            ]);
    }
}

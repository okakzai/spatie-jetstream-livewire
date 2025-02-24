<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'Administrator']);
        $customerRole = Role::create(['name' => 'Customer']);

        $permission = Permission::create(['name' => 'manage tasks']);
        $permission->assignRole($adminRole);
    }
}

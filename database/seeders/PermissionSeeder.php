<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'users', 'label' => 'Management Users', 'parent_id' => null, 'guard_name' => 'web'],
            ['name' => 'users-create', 'label' => 'Create', 'parent_id' => 1, 'guard_name' => 'web'],
            ['name' => 'users-update', 'label' => 'Edit', 'parent_id' => 1, 'guard_name' => 'web'],
            ['name' => 'users-delete', 'label' => 'Delete', 'parent_id' => 1, 'guard_name' => 'web'],
            ['name' => 'roles', 'label' => 'Roles', 'parent_id' => null, 'guard_name' => 'web'],
            ['name' => 'roles-create', 'label' => 'Create', 'parent_id' => 5, 'guard_name' => 'web'],
            ['name' => 'roles-update', 'label' => 'Edit', 'parent_id' => 5, 'guard_name' => 'web'],
            ['name' => 'roles-delete', 'label' => 'Delete', 'parent_id' => 5, 'guard_name' => 'web'],
            ['name' => 'permissions', 'label' => 'Permissions', 'parent_id' => null, 'guard_name' => 'web'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}

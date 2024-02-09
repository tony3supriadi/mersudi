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
            ['name' => 'master-daerah', 'label' => 'Management Daerah', 'parent_id' => null, 'guard_name' => 'web'],
            ['name' => 'master-daerah-create', 'label' => 'Create', 'parent_id' => 10, 'guard_name' => 'web'],
            ['name' => 'master-daerah-update', 'label' => 'Edit', 'parent_id' => 10, 'guard_name' => 'web'],
            ['name' => 'master-daerah-delete', 'label' => 'Delete', 'parent_id' => 10, 'guard_name' => 'web'],
            ['name' => 'master-cabang', 'label' => 'Management Cabang', 'parent_id' => null, 'guard_name' => 'web'],
            ['name' => 'master-cabang-create', 'label' => 'Create', 'parent_id' => 14, 'guard_name' => 'web'],
            ['name' => 'master-cabang-update', 'label' => 'Edit', 'parent_id' => 14, 'guard_name' => 'web'],
            ['name' => 'master-cabang-delete', 'label' => 'Delete', 'parent_id' => 14, 'guard_name' => 'web'],
            ['name' => 'master-kolat', 'label' => 'Management Kolat', 'parent_id' => null, 'guard_name' => 'web'],
            ['name' => 'master-kolat-create', 'label' => 'Create', 'parent_id' => 18, 'guard_name' => 'web'],
            ['name' => 'master-kolat-update', 'label' => 'Edit', 'parent_id' => 18, 'guard_name' => 'web'],
            ['name' => 'master-kolat-delete', 'label' => 'Delete', 'parent_id' => 18, 'guard_name' => 'web'],
            ['name' => 'master-tingkatan', 'label' => 'Daftar Tingkatan', 'parent_id' => null, 'guard_name' => 'web'],
            ['name' => 'master-tingkatan-create', 'label' => 'Create', 'parent_id' => 22, 'guard_name' => 'web'],
            ['name' => 'master-tingkatan-update', 'label' => 'Edit', 'parent_id' => 22, 'guard_name' => 'web'],
            ['name' => 'master-tingkatan-delete', 'label' => 'Delete', 'parent_id' => 22, 'guard_name' => 'web'],
            ['name' => 'master-kta', 'label' => 'Paket KTA', 'parent_id' => null, 'guard_name' => 'web'],
            ['name' => 'master-kta-create', 'label' => 'Create', 'parent_id' => 26, 'guard_name' => 'web'],
            ['name' => 'master-kta-update', 'label' => 'Edit', 'parent_id' => 26, 'guard_name' => 'web'],
            ['name' => 'master-kta-delete', 'label' => 'Delete', 'parent_id' => 26, 'guard_name' => 'web'],
            ['name' => 'master-signature', 'label' => 'Daftar Signature', 'parent_id' => null, 'guard_name' => 'web'],
            ['name' => 'master-signature-create', 'label' => 'Create', 'parent_id' => 30, 'guard_name' => 'web'],
            ['name' => 'master-signature-update', 'label' => 'Edit', 'parent_id' => 30, 'guard_name' => 'web'],
            ['name' => 'master-signature-delete', 'label' => 'Delete', 'parent_id' => 30, 'guard_name' => 'web'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}

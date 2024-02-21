<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Administrator',
            'email' => 'admin@merpatiputih.id',
            'password' => Hash::make('P@$sw0rd'),
            'email_verified_at' => now(),
        ]);
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id', 'id')->all();
        $user->assignRole([$role->id]);
        $role->syncPermissions($permissions);

        $teamIT_role = Role::create(['name' => 'Team IT']);
        $teamIT_permissions = Permission::whereNotIn('id', [4, 8])
            ->pluck('id', 'id')->all();
        $teamIT_role->syncPermissions($teamIT_permissions);

        $aw_role = Role::create(['name' => 'AW']);
        $aw_permissions = Permission::where('id', '>', 9)
            ->whereNotIn('id', [13, 17, 21, 23, 24, 25, 27, 28, 29, 31, 32, 33])
            ->pluck('id', 'id')->all();
        $aw_role->syncPermissions($aw_permissions);

        $ppmp_role = Role::create(['name' => 'PPMP']);
        $ppmp_permissions = Permission::where('id', '>', 9)
            ->whereNotIn('id', [13, 17, 21, 23, 24, 25, 27, 28, 29, 31, 32, 33])
            ->pluck('id', 'id')->all();
        $ppmp_role->syncPermissions($ppmp_permissions);

        $pengda_role = Role::create(['name' => 'Pengda']);
        $pengda_permissions = Permission::where('id', '>', 13)
            ->whereNotIn('id', [17, 21, 23, 24, 25, 27, 28, 29, 31, 32, 33])
            ->pluck('id', 'id')->all();
        $pengda_role->syncPermissions($pengda_permissions);

        $pengcab_role = Role::create(['name' => 'Pengcab']);
        $pengcab_permissions = Permission::where('id', '>', 17)
            ->whereNotIn('id', [21, 23, 24, 25, 27, 28, 29, 31, 32, 33])
            ->pluck('id', 'id')->all();
        $pengcab_role->syncPermissions($pengcab_permissions);

        Role::create(['name' => 'Anggota']);
    }
}

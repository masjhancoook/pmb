<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'Mahasiswa Create',
            'Mahasiswa Edit',
            'Mahasiswa Delete',
            'Mahasiswa Show',
            'Berita Create',
            'Berita Edit',
            'Berita Delete',
            'Berita Show',
            'Operator Create',
            'Operator Edit',
            'Operator Delete',
            'Operator Show',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission
            ]);
        }

        // role Mahasiswa
        $role = Role::firstOrCreate([
            'name' => 'Mahasiswa'
        ]);

        $permissionMahasiswa = [
            'Mahasiswa Create',
            'Mahasiswa Show',
        ];
        $role->syncPermissions($permissionMahasiswa);

        // role admsi
        $operatorRole = $role = Role::firstOrCreate([
            'name' => 'Operator'
        ]);

        $permissionOperator = [
            'Operator Create',
            'Operator Show',
            'Mahasiswa Show',
            'Mahasiswa Edit',
        ];
        $role->syncPermissions($permissionOperator);

        User::firstOrCreate(
            [
                'name' => 'Mumina Kurniawati',
                'email' => 'operator@example.com',
                'password' => bcrypt('operator'),
            ]
        )->syncRoles($operatorRole);


        $superadmin = Role::firstOrCreate([
            'name' => 'Super Admin',
        ]);

        $user = User::firstOrCreate([
            'name' => 'Yasir Muin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
        ])->syncRoles($superadmin);
    }
}

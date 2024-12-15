<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = Role::firstOrCreate(['name' => 'Mahasiswa']);
        User::create(
            [
                'name' => 'Syafiah Mahira',
                'email' => 'students@example.com',
                'password' => bcrypt(value: 'user'),
            ]
        )->syncRoles($mahasiswa);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRolePermissionSeed extends Seeder
{
    public function run(): void
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();
        try {
            $admin = User::create(array_merge([
                'name' => 'Galih Nur Ikhsan',
                'email' => 'galihnurikhsan24@gmail.com',
                'password' => bcrypt('galih123'),
                'no_telp' => '087812767450',
                'jenkel' => 'Laki-Laki',
            ], $default_user_value));

            $petugas = User::create(array_merge([
                'name' => 'Alghi Arif Rahman',
                'password' => bcrypt('password'),
                'email' => 'alghi@gmail.com',
                'no_telp' => '087812767451',
                'jenkel' => 'Laki-Laki',
            ], $default_user_value));

            $siswa = User::create(array_merge([
                'name' => 'Keysar Jordian Alfiansyah',
                'password' => bcrypt('password'),
                'email' => 'keysar@gmail.com',
                'no_telp' => '087812767452',
                'jenkel' => 'Perempuan',
            ], $default_user_value));

            $role_siswa = Role::create(['name' => 'siswa']);
            $role_petugas = Role::create(['name' => 'petugas']);
            $role_admin = Role::create(['name' => 'admin']);

            $permission = Permission::create(['name' => 'read']);
            $permission = Permission::create(['name' => 'create']);
            $permission = Permission::create(['name' => 'update']);
            $permission = Permission::create(['name' => 'delete']);

            $role_siswa->givePermissionTo('read');
            $role_admin->givePermissionTo('read');
            $role_admin->givePermissionTo('create');
            $role_admin->givePermissionTo('update');
            $role_admin->givePermissionTo('delete');
            $role_petugas->givePermissionTo('read');
            $role_petugas->givePermissionTo('create');

            $siswa->assignRole('siswa');
            $petugas->assignRole('petugas');
            $admin->assignRole('admin');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Galih Nur Ikhsan',
                'email' => 'galihnurikhsan24@gmail.com',
                'password' => bcrypt('password'),
                'no_telp' => '087812767450',
                'jenkel' => 'Laki-Laki',
                'roles_id' => '1',
            ],
            [
                'name' => 'Alghi Arif Rahman',
                'password' => bcrypt('password'),
                'email' => 'alghi@gmail.com',
                'no_telp' => '087812767451',
                'jenkel' => 'Laki-Laki',
                'roles_id' => '1',
            ],
            [
                'name' => 'Keysar Jordian Alfiansyah',
                'password' => bcrypt('password'),
                'email' => 'keysar@gmail.com',
                'no_telp' => '087812767452',
                'jenkel' => 'Perempuan',
                'roles_id' => '1',
            ],
            [
                'name' => 'Robby Januar',
                'email' => 'robby@gmail.com',
                'password' => bcrypt('password'),
                'no_telp' => '087812767558',
                'jenkel' => 'Laki-Laki',
                'roles_id' => '1',
            ],
            [
                'name' => 'Iqbal',
                'password' => bcrypt('password'),
                'email' => 'iqbal@gmail.com',
                'no_telp' => '08781278878',
                'jenkel' => 'Laki-Laki',
                'roles_id' => '1',
            ],
            [
                'name' => 'Fachrisan',
                'password' => bcrypt('password'),
                'email' => 'fach@gmail.com',
                'no_telp' => '087812766687',
                'jenkel' => 'Perempuan',
                'roles_id' => '1',
            ],
            [
                'name' => 'Abiyasa',
                'email' => 'abiyasa@gmail.com',
                'password' => bcrypt('password'),
                'no_telp' => '087812767459',
                'jenkel' => 'Laki-Laki',
                'roles_id' => '1',
            ],
            [
                'name' => 'Diaz',
                'password' => bcrypt('password'),
                'email' => 'diaz@gmail.com',
                'no_telp' => '0878127674587',
                'jenkel' => 'Laki-Laki',
                'roles_id' => '1',
            ],
            [
                'name' => 'Rifqi',
                'password' => bcrypt('password'),
                'email' => 'rifqi@gmail.com',
                'no_telp' => '087812767485',
                'jenkel' => 'Perempuan',
                'roles_id' => '1',
            ],
            [
                'name' => 'Khoirul',
                'email' => 'khoirul@gmail.com',
                'password' => bcrypt('password'),
                'no_telp' => '087812767585',
                'jenkel' => 'Laki-Laki',
                'roles_id' => '1',
            ],
            [
                'name' => 'Raffi',
                'password' => bcrypt('password'),
                'email' => 'raffi@gmail.com',
                'no_telp' => '08781278856',
                'jenkel' => 'Laki-Laki',
                'roles_id' => '1',
            ],
            [
                'name' => 'Fauzan',
                'password' => bcrypt('password'),
                'email' => 'ujan@gmail.com',
                'no_telp' => '087812766672',
                'jenkel' => 'Perempuan',
                'roles_id' => '1',
            ],
            [
                'name' => 'Aang Miftah',
                'password' => bcrypt('password'),
                'email' => 'aang@gmail.com',
                'no_telp' => '08781278658',
                'jenkel' => 'Laki-Laki',
                'roles_id' => '2',
            ],
            [
                'name' => 'Cahyohartono',
                'password' => bcrypt('password'),
                'email' => 'cahyo@gmail.com',
                'no_telp' => '087812766485',
                'jenkel' => 'Laki-Laki',
                'roles_id' => '2',
            ],
        ];
        foreach ($user as $key => $e) {
            User::create([
                'name' => $e['name'],
                'password' => $e['password'],
                'no_telp' => $e['no_telp'],
                'roles_id' => $e['roles_id'],
                'jenkel' => $e['jenkel'],
                'email' => $e['email']
            ]);
        }
        $admin = Role::create(['name' => 'admin']);
        $petuga = Role::create(['name' => 'petugas']);
        $tambah = Permission::create(['name' => 'tambah-data']);
        $read = Permission::create(['name' => 'read-data']);

        $galih = User::find(1);
        $galih->assignRole('admin');
        $galih ->givePermissionTo($tambah);

        $cahyo = User::find(14);
        $cahyo->assignRole('petugas');
        $cahyo->givePermissionTo($tambah);
    }
}

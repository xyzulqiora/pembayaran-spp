<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petugas = [
            [
                'nama_role' => 'Siswa',
            ],
            [
                'nama_role' => 'Petugas',
            ],
        ];
        foreach ($petugas as $key => $s) {
            Role::create([
                'nama_role' => $s['nama_role'],
            ]);
        }
    }
}

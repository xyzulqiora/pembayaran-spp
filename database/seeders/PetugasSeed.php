<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petugas = [
            [
                'users_id' => '13',
                'nip' => '0000000001'
            ],
            [
                'users_id' => '14',
                'nip' => '0000000002'
            ],
            [
                'users_id' => '1',
                'nip' => '0000000003'
            ],
        ];
        foreach ($petugas as $key => $s) {
            Petugas::create([
                'users_id' => $s['users_id'],
                'nip' => $s['nip']
            ]);
        }
    }
}

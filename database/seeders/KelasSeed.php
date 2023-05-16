<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            [
                'nama_kelas' => '10'
            ],
            [
                'nama_kelas' => '11'
            ],
            [
                'nama_kelas' => '12'
            ],
        ];
        foreach ($kelas as $key => $k) {
            Kelas::create([
                'nama_kelas' => $k['nama_kelas']
            ]);
        }
    }
}

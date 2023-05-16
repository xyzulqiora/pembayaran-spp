<?php

namespace Database\Seeders;

use App\Models\Kelulusan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelulusanSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelulusan = [
            [
                'siswa_id' => '1',
                'keterangan' => 'Lulus',
                'status' => 'test'
            ],
            [
                'siswa_id' => '2',
                'keterangan' => 'Lulus',
                'status' => 'test'
            ],
            [
                'siswa_id' => '3',
                'keterangan' => 'Lulus',
                'status' => 'test'
            ],
        ];
        foreach ($kelulusan as $key => $k) {
            Kelulusan::create([
                'siswa_id' => $k['siswa_id'],
                'status' => $k['status'],
                'keterangan' => $k['keterangan'],
            ]);
        }
    }
}

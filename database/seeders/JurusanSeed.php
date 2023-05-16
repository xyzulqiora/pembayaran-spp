<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusan = [
            [
                'nama_jurusan' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'nama_jurusan' => 'Perhotelan'
            ],
            [
                'nama_jurusan' => 'Tataboga'
            ],
        ];
        foreach ($jurusan as $key => $k) {
            Jurusan::create([
                'nama_jurusan' => $k['nama_jurusan']
            ]);
        }
    }
}

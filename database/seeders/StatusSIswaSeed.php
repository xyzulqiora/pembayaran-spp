<?php

namespace Database\Seeders;

use App\Models\StatusSiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSIswaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            [
                'status' => 'Aktif'
            ],
            [
                'status' => 'Naik Kelas'
            ],
            [
                'status' => 'Pindah Kelas'
            ],
            [
                'status' => 'Tinggal Kelas'
            ],
            [
                'status' => 'Lulus'
            ],
            [
                'status' => 'Dikeluarkan'
            ],
        ];
        foreach ($status as $key => $k) {
            StatusSiswa::create([
                'status' => $k['status']
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = [
            [
                'users_id' => '1',
                'nisn' => '0000000001',
                'nis' => '2021101901',
                'kelas_id' => '1',
                'jurusan_id' => '1',
                'spp_id' => '1',
                'alamat' => 'Sulaksana',
                'status_id' => '1',
            ],
            [
                'users_id' => '2',
                'nisn' => '0000000002',
                'nis' => '2021101902',
                'kelas_id' => '2',
                'jurusan_id' => '2',
                'spp_id' => '1',
                'alamat' => 'Sulaksana',
                'status_id' => '2',
            ],
            [
                'users_id' => '3',
                'nisn' => '0000000003',
                'nis' => '2021101903',
                'kelas_id' => '3',
                'jurusan_id' => '3',
                'spp_id' => '3',
                'alamat' => 'Sulaksana',
                'status_id' => '3',
            ],
            [
                'users_id' => '4',
                'nisn' => '0000000004',
                'nis' => '2021101904',
                'kelas_id' => '1',
                'jurusan_id' => '1',
                'spp_id' => '1',
                'alamat' => 'Sulaksana',
                'status_id' => '1',
            ],
            [
                'users_id' => '12',
                'nisn' => '0000000012',
                'nis' => '2021101912',
                'kelas_id' => '2',
                'jurusan_id' => '2',
                'spp_id' => '1',
                'alamat' => 'Sulaksana',
                'status_id' => '2',
            ],
            [
                'users_id' => '5',
                'nisn' => '0000000005',
                'nis' => '2021101905',
                'kelas_id' => '3',
                'jurusan_id' => '3',
                'spp_id' => '3',
                'alamat' => 'Sulaksana',
                'status_id' => '3',
            ],
            [
                'users_id' => '6',
                'nisn' => '0000000006',
                'nis' => '2021101906',
                'kelas_id' => '1',
                'jurusan_id' => '1',
                'spp_id' => '1',
                'alamat' => 'Sulaksana',
                'status_id' => '1',
            ],
            [
                'users_id' => '7',
                'nisn' => '0000000007',
                'nis' => '2021101907',
                'kelas_id' => '2',
                'jurusan_id' => '2',
                'spp_id' => '1',
                'alamat' => 'Sulaksana',
                'status_id' => '2',
            ],
            [
                'users_id' => '8',
                'nisn' => '0000000008',
                'nis' => '2021101908',
                'kelas_id' => '3',
                'jurusan_id' => '3',
                'spp_id' => '3',
                'alamat' => 'Sulaksana',
                'status_id' => '3',
            ],
            [
                'users_id' => '9',
                'nisn' => '0000000009',
                'nis' => '2021101909',
                'kelas_id' => '1',
                'jurusan_id' => '1',
                'spp_id' => '1',
                'alamat' => 'Sulaksana',
                'status_id' => '1',
            ],
            [
                'users_id' => '10',
                'nisn' => '0000000010',
                'nis' => '2021101910',
                'kelas_id' => '2',
                'jurusan_id' => '2',
                'spp_id' => '1',
                'alamat' => 'Sulaksana',
                'status_id' => '2',
            ],
            [
                'users_id' => '11',
                'nisn' => '0000000011',
                'nis' => '2021101911',
                'kelas_id' => '3',
                'jurusan_id' => '3',
                'spp_id' => '3',
                'alamat' => 'Sulaksana',
                'status_id' => '3',
            ],
        ];
        foreach ($siswa as $key => $p) {
            Siswa::create([
                'users_id' => $p['users_id'],
                'nisn' => $p['nisn'],
                'nis' => $p['nis'],
                'kelas_id' => $p['kelas_id'],
                'jurusan_id' => $p['jurusan_id'],
                'spp_id' => $p['spp_id'],
                'alamat' => $p['alamat'],
                'status_id' => $p['status_id']
            ]);
        }
    }
}

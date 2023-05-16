<?php

namespace Database\Seeders;

use App\Models\BiayaSiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BiayaSiswaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $biaya_siswa = [
            [
                'penerimaan_id' => '1',
                'nama_biaya' => 'Iuran SPP Bulanan TP 2022/2023',
                'tipe_biaya' => 'Bulanan',

            ],
            [
                'penerimaan_id' => '2',
                'nama_biaya' => 'Kesiswaan & Asuransi TP 2022/2023',
                'tipe_biaya' => 'NON Bulanan',
            ],
            [
                'penerimaan_id' => '3',
                'nama_biaya' => 'Iuran Wajib TP 2022/2023',
                'tipe_biaya' => 'NON Bulanan',
            ],
            [
                'penerimaan_id' => '4',
                'nama_biaya' => 'Iuran PTS/PAS Ganjil TA 2022/2023',
                'tipe_biaya' => 'NON Bulanan',
            ],
            [
                'penerimaan_id' => '5',
                'nama_biaya' => 'Kelulusan TA 2022/2023',
                'tipe_biaya' => 'NON Bulanan',
            ],
            [
                'penerimaan_id' => '6',
                'nama_biaya' => 'Prakerin TA 2022/2023',
                'tipe_biaya' => 'NON Bulanan',
            ],
        ];
        foreach ($biaya_siswa as $key => $k) {
            BiayaSiswa::create([
                'penerimaan_id' => $k['penerimaan_id'],
                'nama_biaya' => $k['nama_biaya'],
                'tipe_biaya' => $k['tipe_biaya']
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Penerimaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenerimaanSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penerimaan = [
            [
                'nama_pos_penerimaan' => 'Iuran Bulanan',
            ],
            [
                'nama_pos_penerimaan' => 'Iuran Lain',
            ],
            [
                'nama_pos_penerimaan' => 'Iuran UAS/PAT',
            ],
            [
                'nama_pos_penerimaan' => 'Iuran Wajib',
            ],
            [
                'nama_pos_penerimaan' => 'Kas Besar',
                // 'keterangan' => 'Kas yang di kelola bendahara',
            ],
            [
                'nama_pos_penerimaan' => 'Kas Kecil',
                // 'keterangan' => 'Kas yang di kelola oleh kasir',
            ],
        ];
        foreach ($penerimaan as $key => $p) {
            Penerimaan::create([
                'nama_pos_penerimaan' => $p['nama_pos_penerimaan'],
                // 'keterangan' => $p['keterangan'],
            ]);
        }
    }
}

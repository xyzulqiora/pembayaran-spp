<?php

namespace Database\Seeders;

use App\Models\Kas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kas = [
            [
                'nama_kas' => 'Kas Di Tangan',
                'keterangan' => 'Kas tunai di tangan petugas penerimaan'
            ],
            [
                'nama_kas' => 'Kas Di Bank',
                'keterangan' => 'Kas Di Bank Bendahara Sekolah'
            ],
        ];
        foreach ($kas as $key => $k) {
            Kas::create([
                'nama_kas' => $k['nama_kas'],
                'keterangan' => $k['keterangan']
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Lainya;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LainyaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lainya = [
            [
                'petugas_id' => '1',
                'pemberi' => 'BJB',
                'keterangan' => 'Sudah Diberikan',
            ],
            [
                'petugas_id' => '2',
                'pemberi' => 'BCA',
                'keterangan' => 'Pending',
            ],
            [
                'petugas_id' => '3',
                'pemberi' => 'Galih',
                'keterangan' => 'Sudah Diberikan',
            ],
        ];
        foreach ($lainya as $key => $l) {
            Lainya::create([
                'petugas_id' => $l['petugas_id'],
                'pemberi' => $l['pemberi'],
                'keterangan' => $l['keterangan'],
            ]);
        }
    }
}

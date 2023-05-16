<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MetodePembayaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MetodePembayaranSeed extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $metode = [
            [
                'metode_pembayaran' => 'Tunai',
                'kas_id' => '1',
            ],
            [
                'metode_pembayaran' => 'Transfer Bank',
                'kas_id' => '2',
            ],
        ];
        foreach ($metode as $key => $t) {
            MetodePembayaran::create([
                'metode_pembayaran' => $t['metode_pembayaran'],
                'kas_id' => $t['kas_id'],
            ]);
        }
    }
}

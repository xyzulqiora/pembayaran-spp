<?php

namespace Database\Seeders;

use App\Models\Spp;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SppSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spp = [
            [
                'tahun_ajaran' => '2019',
                'nominal' => '250.000'
            ],
            [
                'tahun_ajaran' => '2020',
                'nominal' => '300.000'
            ],
            [
                'tahun_ajaran' => '2021',
                'nominal' => '350.000'
            ],
        ];
        foreach ($spp as $key => $s) {
            Spp::create([
                'tahun_ajaran' => $s['tahun_ajaran'],
                'nominal' => $s['nominal']
            ]);
        }
    }
}

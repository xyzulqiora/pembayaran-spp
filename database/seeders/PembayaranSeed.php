<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PembayaranSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pembayaran = [
            [
                'users_id' => '4',
                'siswa_id' => '1',
                'biaya_siswa_id' => '1',
                'spp_bulan' => 'Januari',
                'jumlah_bayar' => '300.000',
                'metode_pembayaran_id' => '1',
                'created_at' => '2023-03-01',
                'Keterangan' => 'Lunas',
            ],
            [
                'users_id' => '5',
                'siswa_id' => '3',
                'biaya_siswa_id' => '2',
                'spp_bulan' => 'Februari',
                'jumlah_bayar' => '300.000',
                'metode_pembayaran_id' => '2',
                'created_at' => '2023-03-01',
                'Keterangan' => 'Lunas'
            ],
            [
                'users_id' => '6',
                'siswa_id' => '2',
                'biaya_siswa_id' => '3',
                'spp_bulan' => 'Januari',
                'jumlah_bayar' => '300.000',
                'metode_pembayaran_id' => '2',
                'created_at' => '2023-03-01',
                'Keterangan' => 'Lunas'
            ],
        ];
        foreach ($pembayaran as $key => $p) {
            Pembayaran::create([
                'users_id' => $p['users_id'],
                'biaya_siswa_id' => $p['biaya_siswa_id'],
                'siswa_id' => $p['siswa_id'],
                'spp_bulan' => $p['spp_bulan'],
                'jumlah_bayar' => $p['jumlah_bayar'],
                'metode_pembayaran_id' => $p['metode_pembayaran_id'],
                'created_at' => $p['created_at'],
                'Keterangan' => $p['Keterangan']
            ]);
        }
    }
}

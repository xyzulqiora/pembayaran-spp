<?php

namespace App\Http\Controllers;

use App\Models\BiayaSiswa;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function index()
    {
        return view('dashboard.keuangan.pembayaran.index', [
            'pembayaran' => Pembayaran::all(),
        ]);
    }

    public function create()
    {
        $biaya = BiayaSiswa::all();
        $petugas = Petugas::all();
        $siswa = Siswa::all();
        return view('dashboard.keuangan.pembayaran.create', [
            'petugas' => $petugas,
            'biaya' => $biaya,
            'siswa' => $siswa
        ]);
    }


    public function store(Request $request)
    {
        $pembayaran = new Pembayaran();
        $pembayaran->users_id = Auth::user()->id;
        $pembayaran->siswa_id = $request->input('siswa_id');
        $pembayaran->biaya_siswa_id = implode(',', $request->biaya_siswa_id);
        $pembayaran->spp_bulan = implode( ',',$request->spp_bulan);
        $pembayaran->jumlah_bayar = $request->input('jumlah_bayar');
        $pembayaran->metode_pembayaran_id = $request->input('metode_pembayaran_id');
        $pembayaran->keterangan = $request->input('keterangan');
        $pembayaran->created_at = $request->input('created_at');
        $pembayaran->save();
        return redirect()->route('pembayaran');
    }

    public function harian($tanggal)
    {
        // $date = $request->input('date', date('Y-m-d'));
        // $pembayaran = Pembayaran::whereDate('created_at', '=', $date)->get();
        $dataTransaksi = Pembayaran::whereBetween('tanggal', [$tanggal.' 00:00:00', $tanggal.' 23:59:59'])->get();
        // return view('tampilan_transaksi', compact('dataTransaksi'));
        return view('dashboard.keuangan.pembayaran.laporan.harian', compact('pembayaran', 'date'));
    }

    public function print_harian()
    {
        return view('dashboard.keuangan.pembayaran.laporan.print-harian', [
            'pembayaran' => Pembayaran::all(),
        ]);
    }

    public function laporan()
    {
        return view('dashboard.keuangan.pembayaran.laporan.laporan', [
            'pembayaran' => Pembayaran::all(),
        ]);
    }
}


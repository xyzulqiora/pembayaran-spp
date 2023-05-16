<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetodePembayaran;

class MetodePembayaranController extends Controller
{
    public function index()
    {
        return view('dashboard.keuangan.metode-pembayaran.index', [
            'metode_pembayaran' => MetodePembayaran::all(),
        ]);
    }
}

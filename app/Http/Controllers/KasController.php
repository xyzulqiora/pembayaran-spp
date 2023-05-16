<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use Illuminate\Http\Request;

class KasController extends Controller
{
    public function index()
    {
        return view('dashboard.keuangan.daftar-kas.index',[
        'kas' => Kas::all(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\BiayaSiswa;
use Illuminate\Http\Request;

class BiayaSiswaController extends Controller
{
    public function index()
    {
        return view('dashboard.keuangan.biaya-siswa.index', [
            'biaya_siswa' => BiayaSiswa::all(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelulusanController extends Controller
{
    public function index()
    {
        $siswaLulus = new SiswaController();
        $siswaLulus->siswaBylulus('Lulus');
        return view('dashboard.kesiswaan.kelulusan.index');
    }
}

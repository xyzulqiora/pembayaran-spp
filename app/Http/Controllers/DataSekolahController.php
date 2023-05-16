<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSekolahController extends Controller
{
    public function index()
    {
        return view('dashboard.sistem.data-sekolah.index');
    }
}

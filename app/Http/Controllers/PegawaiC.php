<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiC extends Controller
{
    public function index()
    {
        return view('petugas');
    }
}

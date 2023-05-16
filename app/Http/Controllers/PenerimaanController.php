<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function index()
    {
        return view('dashboard.keuangan.penerimaan.index', [
            'penerimaan' => Penerimaan::all(),
        ]);
    }
}

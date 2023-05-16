<?php

namespace App\Http\Controllers;

use App\Models\update_history;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        return view('dashboard.log.log-petugas', [
            'log' => update_history::all(),
        ]);
    }
}

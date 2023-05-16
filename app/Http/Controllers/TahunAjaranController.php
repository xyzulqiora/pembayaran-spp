<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    public function index()
    {
        return view('dashboard.kesiswaan.tahun-ajaran.index', [
            'ajaran' => Spp::all(),
        ]);
    }

    public function create()
    {
        return view('dashboard.kesiswaan.tahun-ajaran.create', [
        ]);
    }

    public function store(Request $request)
    {
        Spp::create($request->except('_token','submit'));
        return redirect()->route('tahun-ajaran');
    }

    public function edit($id)
    {
        $ajaran = Spp::find($id);
        return view('dashboard.kesiswaan.tahun-ajaran.edit', [
            'ajaran' => $ajaran,        ]);
    }

    public function update($id, Request $request)
    {
        $ajaran = Spp::find($id);
        $ajaran->update($request->except('_token','submit'));
        return redirect()->route('tahun-ajaran');
    }

    public function destroy($id)
    {
        $ajaran = Spp::find($id);
        $ajaran->delete();
        return redirect()->route('tahun-ajaran');
    }
}

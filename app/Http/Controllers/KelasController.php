<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('dashboard.kesiswaan.kelas.index', [
            'kelas' => Kelas::all(),
        ]);
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('dashboard.kesiswaan.kelas.create', [
            'kelas' => $kelas
        ]);
    }

    public function store(Request $request)
    {
        Kelas::create($request->except('_token','submit'));
        return redirect()->route('kelas');
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('dashboard.kesiswaan.kelas.edit', [
            'kelas' => $kelas
        ]);
    }

    public function update($id, Request $request)
    {
        $kelas = Kelas::find($id);
        $kelas->update($request->except('_token','submit'));
        return redirect()->route('kelas');
    }

    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect()->route('kelas');
    }
}

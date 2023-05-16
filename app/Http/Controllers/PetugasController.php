<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        return view('dashboard.sistem.petugas.index', [
            'petugas' => Petugas::all(),
        ]);
    }


    public function create()
    {
        return view('dashboard.sistem.petugas.create', [
        ]);
    }

    public function store(Request $request)
    {
        // Menyimpan data user
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->no_telp = $request->input('no_telp');
        $user->jenkel = $request->input('jenkel');
        $user->role_id = $request->input('role_id') ?? 1;
        $user->save();

        // Menyimpan data siswa
        $petugas = new Petugas();
        $petugas->users_id = $user->id;
        $petugas->nip = $request->input('nip');
        $petugas->save();
        return redirect()->route('petugas');
    }

    public function edit($id)
    {
        $petugas = Petugas::find($id);
        $users = $petugas->users;
        return view('dashboard.sistem.petugas.edit', [
            'petugas' => $petugas,
            'users' => $users,
        ]);
    }

    public function update($id ,Request $request)
    {
    $petugas = Petugas::findOrFail($id);
    $users = $petugas->users;
    // update data user
    $users->name = $request->input('name');
    $users->email = $request->input('email');
    $users->password = bcrypt($request->input('password'));
    $users->no_telp = $request->input('no_telp');
    $users->jenkel = $request->input('jenkel');
    $users->role_id = $request->input('role_id') ?? 1;
    $users->save();

    $petugas->users_id = $users->id;
    $petugas->nip = $request->input('nip');
    $petugas->save();
    return redirect()->route('petugas')->with('success', 'Data siswa berhasil diperbarui.');;

    }
}

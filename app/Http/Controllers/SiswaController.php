<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\StatusSiswa;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        return view('dashboard.kesiswaan.siswa.index', [
            'siswa' => Siswa::all(),
        ]);
    }

    public function create()
    {
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        $spp = Spp::all();
        $status = StatusSiswa::all();
        return view('dashboard.kesiswaan.siswa.create', [
            'kelas' => $kelas,
            'spp' => $spp,
            'status' => $status,
            'jurusan' => $jurusan
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
        $siswa = new Siswa();
        $siswa->users_id = $user->id;
        $siswa->nisn = $request->input('nisn');
        $siswa->nis = $request->input('nis');
        $siswa->kelas_id = $request->input('kelas_id');
        $siswa->jurusan_id = $request->input('jurusan_id');
        $siswa->spp_id = $request->input('spp_id');
        $siswa->alamat = $request->input('alamat');
        $siswa->status_id = $request->input('status_id');
        $siswa->save();
        return redirect()->route('siswa');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        $spp = Spp::all();
        $users = $siswa->users;
        $status = StatusSiswa::all();
        return view('dashboard.kesiswaan.siswa.edit', [
            'siswa' => $siswa,
            'kelas' => $kelas,
            'users' => $users,
            'spp' => $spp,
            'status' => $status,
            'jurusan' => $jurusan
        ]);
    }

    public function update($id ,Request $request)
    {
    $siswa = Siswa::findOrFail($id);
    $users = $siswa->users;
    // update data user
    $users->name = $request->input('name');
    $users->email = $request->input('email');
    $users->password = bcrypt($request->input('password'));
    $users->no_telp = $request->input('no_telp');
    $users->jenkel = $request->input('jenkel');
    $users->roles_id = $request->input('roles_id') ?? 1;
    $users->save();

    $siswa->users_id = $users->id;
    $siswa->nisn = $request->input('nisn');
    $siswa->nis = $request->input('nis');
    $siswa->kelas_id = $request->input('kelas_id');
    $siswa->jurusan_id = $request->input('jurusan_id');
    $siswa->spp_id = $request->input('spp_id');
    $siswa->alamat = $request->input('alamat');
    $siswa->status_id = $request->input('status_id');
    $siswa->save();
    return redirect()->route('siswa')->with('success', 'Data siswa berhasil diperbarui.');;
    }

    public function lulus()
    {
        return view('dashboard.kesiswaan.status.kelulusan', [
            'siswa' => Siswa::all(),
        ]);
    }
    public function kenaikan()
    {
        $data_siswa = DB::table('siswa')
        ->join('users', 'siswa.users_id', '=', 'users.id')
        ->join('status_siswa', 'siswa.status_id', '=', 'status_siswa.id')
        ->select('siswa.*', 'users.name', 'users.jenkel')
        ->where('status_siswa.status', '=', 'Naik Kelas')
        ->orderBy('users.name', 'ASC')
        ->get();

        return view('dashboard.kesiswaan.status.kenaikan', [
            'siswa' => Siswa::all(),
            'data_siswa' => $data_siswa,
        ]);
    }

    public function pindah()
    {
        $data_siswa = DB::table('siswa')
        ->join('users', 'siswa.users_id', '=', 'users.id')
        ->join('status_siswa', 'siswa.status_id', '=', 'status_siswa.id')
        ->select('siswa.*', 'users.name', 'users.jenkel')
        ->where('status_siswa.status', '=', 'Pindah Kelas')
        ->orderBy('users.name', 'ASC')
        ->get();

        return view('dashboard.kesiswaan.status.pindah', [
            'siswa' => Siswa::all(),
            'data_siswa' => $data_siswa,
        ]);
    }

    public function tinggal()
    {
        $data_siswa = DB::table('siswa')
        ->join('users', 'siswa.users_id', '=', 'users.id')
        ->join('status_siswa', 'siswa.status_id', '=', 'status_siswa.id')
        ->select('siswa.*', 'users.name', 'users.jenkel')
        ->where('status_siswa.status', '=', 'Tinggal Kelas')
        ->orderBy('users.name', 'ASC')
        ->get();

        return view('dashboard.kesiswaan.status.tinggal', [
            'siswa' => Siswa::all(),
            'data_siswa' => $data_siswa,
        ]);
    }

    public function print()
    {
        // $siswa = Siswa::all();
        // $kelas = Kelas::all();
        // $jurusan = Jurusan::all();
        // $users = $siswa->users;
        // $status = StatusSiswa::all();
        // return view('dashboard.kesiswaan.laporan', [
        //     'siswa' => $siswa,
        //     'kelas' => $kelas,
        //     'users' => $users,
        //     'status' => $status,
        //     'jurusan' => $jurusan
        // ]);
        return view('dashboard.kesiswaan.laporan', [
            'siswa' => Siswa::all(),
        ]);
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->route('siswa');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.sistem.daftar-pengguna.index', [
            'user' => User::all(),
        ]);
    }

    public function create()
    {
        return view('dashboard.sistem.daftar-pengguna.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:20'],
            'phone' => ['required', 'max:50'],
            'jenkel' => ['required'],
        ]);
        $attributes['password'] = bcrypt($attributes['password'] );

        $user = User::create($attributes);
        return redirect()->route('user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.sistem.daftar-pengguna.edit', [
            'user' => $user
        ]);
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->update($request->except('_token','submit'));
        return redirect()->route('user');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user');
    }
}

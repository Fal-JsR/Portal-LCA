<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Instansi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showInstansiForm() {
        return view('admin.profile.register.instansi');
    }

    public function registerInstansi(Request $request) {
        $request->validate([
            'nama_instansi' => 'required|string|max:255',
        ]);
        $instansi = Instansi::create(['nama_instansi' => $request->nama_instansi]);
        return redirect()->route('admin.register.user')->with('success', 'Instansi berhasil ditambahkan');
    }

    public function showUserForm() {
        $instansis = Instansi::all();
        return view('admin.profile.register.user', compact('instansis'));
    }

    public function registerUser(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:100|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:admin,client',
            'instansi_id' => 'nullable|exists:instansis,id'
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'instansi_id' => $request->role === 'client' ? $request->instansi_id : null
        ]);

        return redirect()->route('admin.register.user')->with('success', 'Registrasi berhasil');
    }
}

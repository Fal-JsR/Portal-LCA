<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instansi;
use App\Models\GrafikTrafik;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function link()
    {
        return view('admin.link');
    }

    public function trafikLca()
    {
        return view('admin.traficLca.traficlca');
    }

    public function liveMonitoring()
    {
        return view('admin.traficLca.livemonitoring');
    }

    public function upstream()
    {
        return view('admin.traficLca.upstream.upstream');
    }

    public function upstream24jam()
    {
        return view('admin.traficLca.upstream.24jam');
    }

    public function upstreamLive()
    {
        return view('admin.traficLca.upstream.live');
    }

    public function downstream()
    {
        return view('admin.traficLca.downstream.downstream');
    }

    public function downstreamLive()
    {
        return view('admin.traficLca.downstream.livemonitor');
    }

    public function downstream24jam()
    {
        return view('admin.traficLca.downstream.24jam');
    }

    public function ping()
    {
        return view('admin.traficLca.ping');
    }

    public function profile()
    {
        return view('admin.profile.profile');
    }

    public function register()
    {
        return view('admin.profile.register.register');
    }

    public function instansi()
    {
        return view('admin.profile.register.instansi');
    }

    public function storeInstansi(Request $request)
    {
        $request->validate([
            'nama_instansi' => 'required|string|max:255',
        ]);

        Instansi::create([
            'nama_instansi' => $request->nama_instansi,
        ]);

        return redirect()->route('admin.instansi')->with('success', 'Instansi berhasil ditambahkan');
    }

    public function trafikClient()
    {
        $instansis = Instansi::all();
        return view('admin.traficclient.traficclient', compact('instansis'));
    }

    public function showInstansiMonitoring($id)
    {
        $instansi = Instansi::findOrFail($id);
        $users = $instansi->users;
        $grafiks = GrafikTrafik::where('instansi_id', $instansi->id)->get();

        return view('admin.traficclient.monitoring', [
            'instansi' => $instansi,
            'users' => $users,
            'grafiks' => $grafiks,
        ]);
    }

    public function kontak()
    {
        return view('admin.kontak');
    }

    public function edit()
    {
        return view('admin.profile.edit.edit');
    }

    public function editInstansi()
    {
        $instansis = Instansi::with('users')->get();
        return view('admin.profile.edit.editinstansi', compact('instansis'));
    }

    public function updateInstansi(Request $request, $id)
    {
        $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'created_at' => 'required|date',
        ]);

        $instansi = Instansi::findOrFail($id);
        $instansi->update([
            'nama_instansi' => $request->nama_instansi,
            'created_at' => $request->created_at,
        ]);

        return redirect()->route('admin.edit.instansi')->with('success', 'Instansi berhasil diupdate!');
    }

    public function deleteInstansi($id)
    {
        $instansi = Instansi::findOrFail($id);
        $instansi->delete();

        return redirect()->route('admin.edit.instansi')->with('success', 'Instansi berhasil dihapus!');
    }

    public function editUser()
    {
        $users = User::with('instansi')->get();
        $instansis = Instansi::all();
        return view('admin.profile.edit.edituser', compact('users', 'instansis'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'role' => 'required|in:admin,client',
            'instansi_id' => 'nullable|exists:instansis,id',
            'password' => 'nullable|string|min:8',
        ]);

        $updateData = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
            'instansi_id' => $request->instansi_id,
        ];

        if ($request->filled('password')) {
            $updateData['password'] = Hash::make($request->password);
        }

        $user->update($updateData);

        return redirect()->route('admin.edit.user')->with('success', 'User berhasil diupdate!');
    }

    public function deleteUser($id)
    {
        if ($id == auth()->id()) {
            return redirect()->route('admin.edit.user')->with('error', 'Anda tidak dapat menghapus akun sendiri!');
        }

        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.edit.user')->with('success', 'User berhasil dihapus!');
    }

    public function faqFiber()
    {
        return view('admin.faq.faqfiber');
    }
}

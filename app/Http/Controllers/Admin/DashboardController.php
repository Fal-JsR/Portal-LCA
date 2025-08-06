<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        // Add validation and store logic here
        $request->validate([
            'nama_instansi' => 'required|string|max:255',
        ]);

        // Store instansi logic would go here
        
        return redirect()->route('admin.instansi')->with('success', 'Instansi berhasil ditambahkan');
    }
}


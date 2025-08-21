<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Instansi;
use App\Models\GrafikTrafik;
use App\Models\RecordMaintenance;
use App\Models\KontrakPelanggan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('client.dashboard');
    }

    public function link()
    {
        return view('client.link');
    }

    public function trafickIndex()
    {
        $user = Auth::user();
        $instansi = Instansi::find($user->instansi_id);
        $grafiks = GrafikTrafik::where('instansi_id', $user->instansi_id)->get();

        return view('client.trafick.trafickindex', compact('instansi', 'grafiks'));
    }

    public function recordIndex()
    {
        $user = Auth::user();
        $instansi = Instansi::find($user->instansi_id);
        $records = RecordMaintenance::where('instansi_id', $user->instansi_id)->latest()->get();

        return view('client.record.record', compact('instansi', 'records'));
    }

    public function kontrakIndex()
    {
        $user = Auth::user();
        $instansi = Instansi::find($user->instansi_id);
        $kontrak = KontrakPelanggan::where('instansi_id', $user->instansi_id)->first();

        return view('client.kontrak.kontrak', compact('instansi', 'kontrak'));
    }
}

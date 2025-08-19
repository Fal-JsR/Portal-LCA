<?php

namespace App\Http\Controllers;

use App\Models\GrafikTrafik;
use App\Models\Instansi;
use Illuminate\Http\Request;

class GrafikTrafikController extends Controller
{
    public function create()
    {
        $instansis = Instansi::all();
        return view('admin.profile.register.grafik', compact('instansis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'instansi_id' => 'required|exists:instansis,id',
            'nama' => 'required|string|max:255',
            'url_2jam' => 'nullable|url',
            'url_24jam' => 'nullable|url',
            'url_30hari' => 'nullable|url',
            'url_365hari' => 'nullable|url',
        ]);

        GrafikTrafik::create([
            'instansi_id' => $request->instansi_id,
            'nama' => $request->nama,
            'url_2jam' => $request->url_2jam ? html_entity_decode($request->url_2jam) : null,
            'url_24jam' => $request->url_24jam ? html_entity_decode($request->url_24jam) : null,
            'url_30hari' => $request->url_30hari ? html_entity_decode($request->url_30hari) : null,
            'url_365hari' => $request->url_365hari ? html_entity_decode($request->url_365hari) : null,
        ]);

        return redirect()->route('admin.trafik-client')->with('success', 'Grafik berhasil ditambahkan');
    }

    public function editGrafik()
    {
        $grafiks = GrafikTrafik::with('instansi')->get();
        $instansis = Instansi::all();
        return view('admin.profile.edit.editgrafik', compact('grafiks', 'instansis'));
    }

    public function updateGrafik(Request $request, $id)
    {
        $request->validate([
            'instansi_id' => 'required|exists:instansis,id',
            'nama' => 'required|string|max:255',
            'url_2jam' => 'nullable|url',
            'url_24jam' => 'nullable|url',
            'url_30hari' => 'nullable|url',
            'url_365hari' => 'nullable|url',
        ]);

        $grafik = GrafikTrafik::findOrFail($id);
        $grafik->update([
            'instansi_id' => $request->instansi_id,
            'nama' => $request->nama,
            'url_2jam' => $request->url_2jam ? html_entity_decode($request->url_2jam) : null,
            'url_24jam' => $request->url_24jam ? html_entity_decode($request->url_24jam) : null,
            'url_30hari' => $request->url_30hari ? html_entity_decode($request->url_30hari) : null,
            'url_365hari' => $request->url_365hari ? html_entity_decode($request->url_365hari) : null,
        ]);

        return redirect()->route('admin.edit.grafik')->with('success', 'Grafik berhasil diupdate!');
    }

    public function deleteGrafik($id)
    {
        $grafik = GrafikTrafik::findOrFail($id);
        $grafik->delete();

        return redirect()->route('admin.edit.grafik')->with('success', 'Grafik berhasil dihapus!');
    }
}

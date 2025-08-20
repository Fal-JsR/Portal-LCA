<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instansi;
use App\Models\GrafikTrafik;
use App\Models\User;
use App\Models\RecordMaintenance;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use App\Exports\RecordMaintenanceExport;

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
        return view('admin.traficclient.trraficclient', compact('instansis'));
    }

    public function showInstansiMonitoring($id)
    {
        $instansi = Instansi::findOrFail($id);
        $users = $instansi->users;
        $grafiks = GrafikTrafik::where('instansi_id', $instansi->id)->get();

        return view('admin.trraficclient.monitoring', [
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

    public function faqIndex()
    {
        return view('admin.faq.faqindex');
    }

    public function faqFiber()
    {
        return view('admin.faq.faqfiber');
    }

    public function faqWireless()
    {
        return view('admin.faq.faqwireless');
    }

    public function recordIndex()
    {
        $instansis = Instansi::with('users')->get();
        return view('admin.record.recordindex', compact('instansis'));
    }

    public function inputRecord()
    {
        $instansis = Instansi::all();
        return view('admin.record.inputrecord', compact('instansis'));
    }

    public function storeRecord(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'instansi_id' => 'required|exists:instansis,id',
            'nama_perusahaan_tambahan' => 'nullable|string|max:255',
            'keluhan' => 'required|string',
            'status' => 'required|in:Selesai,Progress,Pending',
            'keterangan_progress' => 'nullable|string',
            'kebutuhan_perangkat' => 'nullable|string|max:255',
            'jenis' => 'required|in:Kunjungan,Perbaikan',
            'gambar.*' => 'nullable|image|max:2048',
        ]);

        $gambarPaths = [];
        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $key => $file) {
                if ($key < 5) {
                    $gambarPaths[] = $file->store('maintenance', 'public');
                }
            }
        }

        RecordMaintenance::create([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'instansi_id' => $request->instansi_id,
            'nama_perusahaan_tambahan' => $request->nama_perusahaan_tambahan,
            'keluhan' => $request->keluhan,
            'status' => $request->status,
            'keterangan_progress' => $request->keterangan_progress,
            'kebutuhan_perangkat' => $request->kebutuhan_perangkat,
            'jenis' => $request->jenis,
            'gambar' => json_encode($gambarPaths),
        ]);

        return redirect()->route('admin.record.index')->with('success', 'Record maintenance berhasil disimpan!');
    }

    public function recordMaintenance($id)
    {
        $instansi = Instansi::findOrFail($id);
        $records = RecordMaintenance::where('instansi_id', $id)->latest()->get();
        return view('admin.record.recordmaintenance', compact('instansi', 'records'));
    }

    public function exportRecord()
    {
        $records = RecordMaintenance::with('instansi')->get();

        // Header kolom sesuai format gambar
        $header = [
            'Nama',
            'Tanggal',
            'Nama Perusahaan',
            'Nama Perusahaan Tambahan',
            'Keluhan/Kendala',
            'Status Pekerjaan',
            'Keterangan Progress/Pending',
            'Kebutuhan Perangkat',
            'Jenis',
            'Gambar'
        ];

        $rows = [];
        foreach ($records as $record) {
            $gambarList = '';
            if ($record->gambar) {
                $gambarArr = json_decode($record->gambar, true) ?? [];
                $gambarList = implode(', ', array_map(function($img) {
                    return asset('storage/' . $img);
                }, $gambarArr));
            }
            $rows[] = [
                $record->nama,
                $record->tanggal,
                $record->instansi->nama_instansi ?? '',
                $record->nama_perusahaan_tambahan,
                $record->keluhan,
                $record->status,
                $record->keterangan_progress,
                $record->kebutuhan_perangkat,
                $record->jenis,
                $gambarList
            ];
        }

        // Buat file CSV (bisa dibuka di Excel)
        $filename = 'record_maintenance_' . date('Ymd_His') . '.csv';
        $handle = fopen('php://temp', 'r+');
        fputcsv($handle, $header);
        foreach ($rows as $row) {
            fputcsv($handle, $row);
        }
        rewind($handle);
        $csv = stream_get_contents($handle);
        fclose($handle);

        return Response::make($csv, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }

    public function exportRecordPage()
    {
        return view('admin.record.exportrecord');
    }

    public function exportRecordExcel(Request $request)
    {
        // Filter data sesuai range
        $query = RecordMaintenance::with('instansi');
        if ($request->range === 'bulan' && $request->bulan) {
            $bulan = $request->bulan;
            $start = $bulan . '-01';
            $end = date('Y-m-t', strtotime($start));
            $query->whereBetween('tanggal', [$start, $end]);
        } elseif ($request->range === 'minggu' && $request->minggu) {
            $minggu = $request->minggu;
            $start = date('Y-m-d', strtotime($minggu));
            $end = date('Y-m-d', strtotime($minggu . ' +6 days'));
            $query->whereBetween('tanggal', [$start, $end]);
        } elseif ($request->range === 'custom' && $request->start && $request->end) {
            $query->whereBetween('tanggal', [$request->start, $request->end]);
        }
        $records = $query->get();

        return Excel::download(new RecordMaintenanceExport($records), 'record_maintenance_' . date('Ymd_His') . '.xlsx');
    }
}

@extends('layouts.admin-dashboard')
@section('content')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">INPUT RECORD MAINTENANCE</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white shadow-lg rounded-2xl p-6 max-w-2xl mx-auto">
        <form action="{{ route('admin.record.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                <input type="text" name="nama" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                <input type="date" name="tanggal" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="instansi_id" class="block text-sm font-medium text-gray-700 mb-2">Nama Perusahaan</label>
                <select name="instansi_id" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
                    <option value="">-- Pilih Instansi --</option>
                    @foreach($instansis as $instansi)
                        <option value="{{ $instansi->id }}">{{ $instansi->nama_instansi }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="nama_perusahaan_tambahan" class="block text-sm font-medium text-gray-700 mb-2">Nama Perusahaan Tambahan</label>
                <input type="text" name="nama_perusahaan_tambahan" class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="keluhan" class="block text-sm font-medium text-gray-700 mb-2">Keluhan / Kendala Pekerjaan</label>
                <textarea name="keluhan" rows="2" class="w-full px-3 py-2 border border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status Pekerjaan</label>
                <select name="status" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
                    <option value="Selesai">Selesai</option>
                    <option value="Progress">Progress</option>
                    <option value="Pending">Pending</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="keterangan_progress" class="block text-sm font-medium text-gray-700 mb-2">Keterangan Jika Progress & Pending</label>
                <textarea name="keterangan_progress" rows="2" class="w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
            </div>

            <div class="mb-4">
                <label for="kebutuhan_perangkat" class="block text-sm font-medium text-gray-700 mb-2">Kebutuhan Perangkat</label>
                <input type="text" name="kebutuhan_perangkat" class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="gambar[]" class="block text-sm font-medium text-gray-700 mb-2">Upload Eviden/Gambar (max 5)</label>
                <input type="file" name="gambar[]" class="w-full px-3 py-2 border border-gray-300 rounded-md" accept="image/*" multiple>
                <small class="text-gray-500">Maksimal 5 gambar, format jpg/png/jpeg</small>
            </div>

            <div class="mb-4">
                <label for="jenis" class="block text-sm font-medium text-gray-700 mb-2">Jenis</label>
                <select name="jenis" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
                    <option value="Kunjungan">Kunjungan</option>
                    <option value="Perbaikan">Perbaikan</option>
                </select>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('admin.record.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition-colors">
                    Kembali
                </a>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">
                    Simpan Record
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

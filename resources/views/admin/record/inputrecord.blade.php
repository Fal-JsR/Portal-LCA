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
                <label for="instansi_id" class="block text-sm font-medium text-gray-700 mb-2">Instansi</label>
                <select name="instansi_id" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
                    <option value="">-- Pilih Instansi --</option>
                    @foreach($instansis as $instansi)
                        <option value="{{ $instansi->id }}">{{ $instansi->nama_instansi }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="jenis" class="block text-sm font-medium text-gray-700 mb-2">Jenis</label>
                <select name="jenis" class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
                    <option value="Kunjungan">Kunjungan</option>
                    <option value="Perbaikan">Perbaikan</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="permasalahan" class="block text-sm font-medium text-gray-700 mb-2">Permasalahan</label>
                <textarea name="permasalahan" rows="2" class="w-full px-3 py-2 border border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label for="solusi" class="block text-sm font-medium text-gray-700 mb-2">Solusi / Pekerjaan</label>
                <textarea name="solusi" rows="2" class="w-full px-3 py-2 border border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block text-sm font-medium text-gray-700 mb-2">Upload Gambar</label>
                <input type="file" name="gambar" class="w-full px-3 py-2 border border-gray-300 rounded-md" accept="image/*">
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

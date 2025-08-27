@extends('layouts.admin-dashboard')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">TAMBAH GRAFIK TRAFIK</h1>

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
            <form action="{{ route('admin.grafik.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="instansi_id" class="block text-sm font-medium text-gray-700 mb-2">Instansi</label>
                    <select
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        name="instansi_id" required>
                        <option value="">-- Pilih Instansi --</option>
                        @foreach ($instansis as $instansi)
                            <option value="{{ $instansi->id }}" {{ old('instansi_id') == $instansi->id ? 'selected' : '' }}>
                                {{ $instansi->nama_instansi }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Grafik</label>
                    <input type="text"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        name="nama" value="{{ old('nama') }}" required>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">URL Grafik per Jenis Waktu</label>
                    <input type="url"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-2"
                        name="url_2jam" value="{{ old('url_2jam') }}" placeholder="URL 2 Jam (opsional)">
                    <input type="url"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-2"
                        name="url_24jam" value="{{ old('url_24jam') }}" placeholder="URL 24 Jam (opsional)">
                    <input type="url"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-2"
                        name="url_30hari" value="{{ old('url_30hari') }}" placeholder="URL 30 Hari (opsional)">
                    <input type="url"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        name="url_365hari" value="{{ old('url_365hari') }}" placeholder="URL 365 Hari (opsional)">
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('admin.register') }}"
                        class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition-colors">
                        Kembali
                    </a>
                    <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">
                        Simpan Grafik
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
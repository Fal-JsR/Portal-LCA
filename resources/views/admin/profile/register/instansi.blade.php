@extends('layouts.admin-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Tambah Instansi</h1>
    
    <div class="bg-white shadow-lg rounded-lg p-6 max-w-2xl mx-auto">
        <form action="{{ route('instansi.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_instansi" class="block text-sm font-medium text-gray-700 mb-2">Nama Instansi</label>
                <input type="text" name="nama_instansi" id="nama_instansi" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
        </form>
    </div>
</div>
@endsection

@extends('layouts.client-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Dashboard Client</h1>
    <p class="text-center text-gray-600 mb-8">Halo, {{ Auth::user()->name }}. Anda login sebagai <strong>Client</strong>.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Data Perusahaan Anda</h3>
            <p class="text-gray-600 mb-4">Akses informasi yang relevan hanya untuk Anda.</p>
            <a href="#" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Lihat Detail</a>
        </div>
        
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Status Jaringan</h3>
            <p class="text-gray-600 mb-4">Lihat status terkini koneksi jaringan Anda.</p>
            <a href="#" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Cek Status</a>
        </div>
    </div>
</div>
@endsection

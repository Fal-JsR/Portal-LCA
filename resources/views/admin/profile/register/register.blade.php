@extends('layouts.admin-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">BUAT AKUN</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">INSTANSI CLIENT</h3>
            <a href="{{ route('admin.register.instansi') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Daftar Instansi</a>
        </div>
        
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">AKUN CLIENT</h3>
            <a href="{{ route('admin.register.user') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Daftar User</a>
        </div>

        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">TAMBAH GRAFIK</h3>
            <a href="{{ route('admin.grafik.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Tambah Grafik</a>
        </div>
    </div>
</div>
@endsection
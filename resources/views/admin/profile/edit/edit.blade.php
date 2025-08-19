@extends('layouts.admin-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">EDIT DATA</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">EDIT INSTANSI</h3>
            <a href="{{ route('admin.edit.instansi') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Edit Instansi</a>
        </div>
        
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">EDIT CLIENT</h3>
            <a href="{{ route('admin.edit.user') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Edit User</a>
        </div>

        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">EDIT GRAFIK</h3>
            <a href="{{ route('admin.edit.grafik') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Edit Grafik</a>
        </div>
    </div>
</div>
@endsection
@extends('layouts.client-dashboard')
@section('content')
    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Profil Saya</h1>
        <div class="max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-8">
            <div class="flex items-center mb-6">
                <div class="h-16 w-16 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                    <i class="fas fa-user text-blue-600 text-3xl"></i>
                </div>
                <div>
                    <div class="text-xl font-semibold text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm text-gray-500">{{ Auth::user()->username }}</div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm mb-1">Email</label>
                <div class="text-gray-800 font-medium">{{ Auth::user()->email }}</div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm mb-1">Instansi</label>
                <div class="text-gray-800 font-medium">{{ Auth::user()->instansi->nama_instansi ?? '-' }}</div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm mb-1">Tanggal Gabung</label>
                <div class="text-gray-800 font-medium">{{ Auth::user()->created_at->format('d M Y H:i') }}</div>
            </div>
        </div>
    </div>
@endsection
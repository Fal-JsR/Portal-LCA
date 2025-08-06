@extends('layouts.admin-dashboard')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
            <h2 class="text-xl font-bold text-white">Registrasi Instansi Baru</h2>
            <p class="text-blue-100 text-sm mt-1">Daftarkan instansi baru untuk client</p>
        </div>
        
        <div class="p-6">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('register.instansi.submit') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="nama_instansi" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Instansi <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           name="nama_instansi" 
                           id="nama_instansi" 
                           placeholder="Masukkan nama instansi" 
                           required>
                    @error('nama_instansi')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex space-x-4 pt-4">
                    <button type="submit" 
                            class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                        <i class="fas fa-plus mr-2"></i>Daftar Instansi
                    </button>
                    <a href="{{ route('admin.register') }}" 
                       class="flex-1 bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-200 text-center">
                        <i class="fas fa-arrow-left mr-2"></i>Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

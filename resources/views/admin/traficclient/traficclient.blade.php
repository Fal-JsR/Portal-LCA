@extends('layouts.admin-dashboard')
@section('content')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">TRAFIK CLIENT</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($instansis as $instansi)
        <div class="bg-white shadow-lg rounded-2xl p-6 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center mb-4">
                <i class="fas fa-building text-blue-600 text-2xl mr-3"></i>
                <h3 class="text-xl font-semibold text-gray-800">{{ $instansi->nama_instansi }}</h3>
            </div>
            
            <div class="mb-4">
                <p class="text-sm text-gray-600 mb-2">
                    <i class="fas fa-id-card mr-2"></i>ID: {{ $instansi->id }}
                </p>
                <p class="text-sm text-gray-600 mb-2">
                    <i class="fas fa-users mr-2"></i>Users: {{ $instansi->users->count() }}
                </p>
                <p class="text-sm text-gray-600">
                    <i class="fas fa-calendar mr-2"></i>Terdaftar: {{ $instansi->created_at->format('d M Y') }}
                </p>
            </div>

            <a href="{{ route('admin.instansi.monitoring', $instansi->id) }}"
               class="inline-block w-full text-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200">
                <i class="fas fa-chart-line mr-2"></i>Lihat Monitoring
            </a>
        </div>
        @empty
        <div class="col-span-full text-center py-12">
            <i class="fas fa-building text-gray-400 text-6xl mb-4"></i>
            <p class="text-gray-500 text-lg">Belum ada instansi terdaftar.</p>
            <a href="{{ route('admin.register.instansi') }}" 
               class="inline-block mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                <i class="fas fa-plus mr-2"></i>Daftar Instansi Baru
            </a>
        </div>
        @endforelse
    </div>
</div>
@endsection

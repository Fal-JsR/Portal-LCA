@extends('layouts.admin-dashboard')
@section('content')

<style>
    @keyframes fadeUp {
        0% { opacity: 0; transform: translateY(20px);}
        100% { opacity: 1; transform: translateY(0);}
    }
    .fade-up { animation: fadeUp 0.6s ease forwards; }
</style>
<div class="container mx-auto px-4 py-10">
    <h1 class="text-4xl font-extrabold text-center text-gray-800 tracking-wide fade-up">
        TRAFIK CLIENT
        <span class="block w-28 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-3 rounded-full"></span>
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10 fade-up">
        @forelse($instansis as $instansi)
        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-2xl hover:scale-[1.02] transition duration-300 ease-in-out">
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
               class="inline-block w-full text-center px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 hover:shadow-lg transition duration-300">
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

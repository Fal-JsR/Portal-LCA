@extends('layouts.client-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Dashboard</h1>
    <p class="text-center text-gray-600 mb-8">Halo, {{ Auth::user()->name }}. Ada yang bisa kami bantu?</p>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10 fade-up">
        <!-- Card Trafik LCA -->
        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-2xl hover:scale-[1.02] transition duration-300 ease-in-out">
            <h3 class="text-xl font-semibold text-gray-800 mb-2 flex items-center">
                <i class="fas fa-chart-area mr-2 text-green-600"></i>
                TRAFIK LCA
            </h3>
            <p class="text-gray-600 text-sm mb-4">Monitoring traffic jaringan LCA</p>
            <a href="{{ route('admin.trafik-lca') }}" 
               class="inline-block px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 hover:shadow-lg transition duration-300">
                <i class="fas fa-eye mr-2"></i>Lihat Monitoring
            </a>
        </div>
        <!-- Card Trafik Client -->
        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-2xl hover:scale-[1.02] transition duration-300 ease-in-out">
            <h3 class="text-xl font-semibold text-gray-800 mb-2 flex items-center">
                <i class="fas fa-building mr-2 text-purple-600"></i>
                TRAFIK CLIENT
            </h3>
            <p class="text-gray-600 text-sm mb-4">Monitoring per instansi client</p>
            <a href="{{ route('admin.trafik-client') }}" 
               class="inline-block px-4 py-2 bg-purple-600 text-white rounded-lg shadow hover:bg-purple-700 hover:shadow-lg transition duration-300">
                <i class="fas fa-chart-line mr-2"></i>Lihat Client
            </a>
        </div>
        <!-- Card FAQ -->
        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-2xl hover:scale-[1.02] transition duration-300 ease-in-out">
            <h3 class="text-xl font-semibold text-gray-800 mb-2 flex items-center">
                <i class="fas fa-question-circle mr-2 text-indigo-600"></i>
                FAQ
            </h3>
            <p class="text-gray-600 text-sm mb-4">Panduan troubleshooting fiber optic</p>
            <a href="{{ route('admin.faq.index') }}" 
               class="inline-block px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 hover:shadow-lg transition duration-300">
                <i class="fas fa-book mr-2"></i>Lihat FAQ
            </a>
        </div>
        <!-- Card Kontak -->
        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-2xl hover:scale-[1.02] transition duration-300 ease-in-out">
            <h3 class="text-xl font-semibold text-gray-800 mb-2 flex items-center">
                <i class="fas fa-phone mr-2 text-red-600"></i>
                KONTAK
            </h3>
            <p class="text-gray-600 text-sm mb-4">Informasi kontak dan lokasi</p>
            <a href="{{ route('admin.kontak') }}" 
               class="inline-block px-4 py-2 bg-red-600 text-white rounded-lg shadow hover:bg-red-700 hover:shadow-lg transition duration-300">
                <i class="fas fa-address-book mr-2"></i>Lihat Kontak
            </a>
        </div>
        <!-- Card Profil -->
        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-2xl hover:scale-[1.02] transition duration-300 ease-in-out">
            <h3 class="text-xl font-semibold text-gray-800 mb-2 flex items-center">
                <i class="fas fa-user-cog mr-2 text-yellow-600"></i>
                PROFIL & MANAGE
            </h3>
            <p class="text-gray-600 text-sm mb-4">Pengaturan akun dan manajemen</p>
            <a href="{{ route('admin.profile') }}" 
               class="inline-block px-4 py-2 bg-yellow-600 text-white rounded-lg shadow hover:bg-yellow-700 hover:shadow-lg transition duration-300">
                <i class="fas fa-cog mr-2"></i>Kelola Profil
            </a>
        </div>
    </div>
</div>
@endsection

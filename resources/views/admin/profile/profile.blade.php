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
        PROFILE
        <span class="block w-28 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-3 rounded-full"></span>
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10 fade-up">
        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-2xl hover:scale-[1.02] transition duration-300 ease-in-out">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">REGISTRASI</h3>
            <a href="{{ route('admin.register') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 hover:shadow-lg transition duration-300">Cek Status</a>
        </div>
        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-2xl hover:scale-[1.02] transition duration-300 ease-in-out">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">EDIT</h3>
            <a href="{{route ('admin.edit')}}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 hover:shadow-lg transition duration-300">Cek Status</a>
        </div>
    </div>
</div>
@endsection
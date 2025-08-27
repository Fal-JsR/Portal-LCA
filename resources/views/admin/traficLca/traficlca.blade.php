@extends('layouts.admin-dashboard')

@section('content')
<style>
    @keyframes fadeUp {
        0% { opacity: 0; transform: translateY(20px);}
        100% { opacity: 1; transform: translateY(0);}
    }
    .fade-up { animation: fadeUp 0.6s ease forwards; }
    .card-enhanced {
        border-left: 6px solid #3b82f6;
        transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s, background 0.3s;
    }
    .card-enhanced:hover {
        box-shadow: 0 10px 32px 0 rgba(59,130,246,0.15), 0 2px 4px 0 rgba(0,0,0,0.08);
        transform: scale(1.035);
        border-left-color: #22c55e;
        background: linear-gradient(90deg, #f0f9ff 0%, #e0f7fa 100%);
    }
</style>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800 fade-up">TRAFIK LCA</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 fade-up">
        <div class="bg-white shadow-lg rounded-2xl p-6 card-enhanced">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">MONITORING LIVE</h3>
            <a href="{{ route ('admin.live-monitoring') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Cek Status</a>
        </div>
        
        <div class="bg-white shadow-lg rounded-2xl p-6 card-enhanced">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">UPSTREAM</h3>
            <a href="{{ route('admin.upstream') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Cek Status</a>
        </div>

        <div class="bg-white shadow-lg rounded-2xl p-6 card-enhanced">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">DOWNSTREAM</h3>
            <a href="{{route('admin.downstream')}}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Cek Status</a>
        </div>
        
        <div class="bg-white shadow-lg rounded-2xl p-6 card-enhanced">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">PING</h3>
            <a href="{{ route ('admin.ping')}}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Cek Status</a>
        </div>
    </div>
</div>
@endsection
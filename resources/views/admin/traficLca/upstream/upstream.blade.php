@extends('layouts.admin-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">UPSTREAM</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">LIVE</h3>
            <a href="{{ route ('admin.upstream-live') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Cek Status</a>
        </div>
        
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">24 JAM</h3>
            <a href="{{route ('admin.upstream-24jam')}}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Cek Status</a>
        </div>
    </div>
</div>
@endsection
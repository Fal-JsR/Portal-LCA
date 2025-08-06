@extends('layouts.admin-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">LINK</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">TOPOLOGI LCA</h3>
            <a href="https://drive.google.com/file/d/1Hvq9u-7RM_FdiBbxEbfQWO7yAwTp5aqT/view?pli=1" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Lihat Detail</a>
        </div>
        
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">MRTG</h3>
            <a href="http://103.156.225.17/cacti/" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Lihat Detail</a>
        </div>

                <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">PRTG</h3>
            <a href="https://nms-lca.mendek.in/index.htm" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Lihat Detail</a>
        </div>

                <div class="bg-white shadow-lg rounded-2xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">PORTAL HRD</h3>
            <a href="https://www.jotform.com/app/242970110347451" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Lihat Detail</a>
        </div>
    </div>
</div>
@endsection
@extends('layouts.admin-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Frequently Asked Question (FAQ)</h1>
    <p class="text-center text-gray-600 mb-8">Pilih jenis FAQ yang ingin Anda lihat</p>
    <div class="max-w-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
        <a href="{{ route('admin.faq.fiber') }}" class="bg-blue-50 rounded-2xl shadow-lg p-8 flex flex-col items-center hover:bg-blue-100 transition">
            <i class="fas fa-fiber-new text-blue-600 text-4xl mb-4"></i>
            <span class="font-semibold text-lg text-blue-700 mb-2">FAQ Fiber Optic</span>
            <span class="text-gray-500 text-sm text-center">Troubleshooting koneksi fiber optic</span>
        </a>
        <a href="{{ route('admin.faq.wireless') }}" class="bg-blue-50 rounded-2xl shadow-lg p-8 flex flex-col items-center hover:bg-blue-100 transition">
            <i class="fas fa-wifi text-blue-600 text-4xl mb-4"></i>
            <span class="font-semibold text-lg text-blue-700 mb-2">FAQ Wireless</span>
            <span class="text-gray-500 text-sm text-center">Troubleshooting koneksi wireless</span>
        </a>
    </div>
</div>
@endsection

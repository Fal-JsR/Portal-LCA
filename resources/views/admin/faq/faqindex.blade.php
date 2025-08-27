@extends('layouts.admin-dashboard')

@section('content')
    <style>
        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-up {
            animation: fadeUp 0.6s ease forwards;
        }

        .card-enhanced {
            border-left: 6px solid #3b82f6;
            transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s, background 0.3s;
        }

        .card-enhanced:hover {
            box-shadow: 0 10px 32px 0 rgba(59, 130, 246, 0.15), 0 2px 4px 0 rgba(0, 0, 0, 0.08);
            transform: scale(1.035);
            border-left-color: #22c55e;
            background: linear-gradient(90deg, #f0f9ff 0%, #e0f7fa 100%);
        }
    </style>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-600 fade-up">Frequently Asked Question (FAQ)</h1>
        <p class="text-center text-gray-600 mb-8 fade-up">Pilih jenis FAQ yang ingin Anda lihat</p>
        <div class="max-w-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 fade-up">
            <a href="{{ route('admin.faq.fiber') }}"
                class="bg-blue-50 rounded-2xl shadow-lg p-8 flex flex-col items-center hover:bg-blue-100 transition card-enhanced">
                <i class="fas fa-fiber-new text-blue-600 text-4xl mb-4"></i>
                <span class="font-semibold text-lg text-blue-700 mb-2">FAQ Fiber Optic</span>
                <span class="text-gray-500 text-sm text-center">Troubleshooting koneksi fiber optic</span>
            </a>
            <a href="{{ route('admin.faq.wireless') }}"
                class="bg-blue-50 rounded-2xl shadow-lg p-8 flex flex-col items-center hover:bg-blue-100 transition card-enhanced">
                <i class="fas fa-wifi text-blue-600 text-4xl mb-4"></i>
                <span class="font-semibold text-lg text-blue-700 mb-2">FAQ Wireless</span>
                <span class="text-gray-500 text-sm text-center">Troubleshooting koneksi wireless</span>
            </a>
        </div>
    </div>
@endsection
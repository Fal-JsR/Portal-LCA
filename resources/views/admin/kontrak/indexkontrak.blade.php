@extends('layouts.admin-dashboard')

@section('content')
    <style>
        /* Animasi fade-up */
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

        /* Card Enhancement */
        .card-enhanced {
            border-left: 6px solid #3b82f6;
            transition:
                box-shadow 0.3s,
                transform 0.3s,
                border-color 0.3s,
                background 0.3s;
        }

        .card-enhanced:hover {
            box-shadow:
                0 10px 32px 0 rgba(59, 130, 246, 0.15),
                0 2px 4px 0 rgba(0, 0, 0, 0.08);
            transform: scale(1.035);
            border-left-color: #22c55e;
            background: linear-gradient(90deg, #f0f9ff 0%, #e0f7fa 100%);
        }
    </style>

    <div class="container mx-auto px-4 py-10">
        <!-- Judul Halaman -->
        <h1 class="text-4xl font-extrabold text-center text-gray-800 tracking-wide fade-up">
            KONTRAK PELANGGAN
            <span class="block w-28 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mt-3 rounded-full"></span>
        </h1>

        <!-- Daftar Instansi -->
        <div class="fade-up">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-building text-blue-600 mr-3"></i> Daftar Instansi
            </h2>
            @if($instansis->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($instansis as $instansi)
                        <div
                            class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 card-enhanced">
                            <div class="flex items-center mb-4">
                                <div class="p-3 bg-blue-100 rounded-xl flex justify-center items-center shadow-md">
                                    <i class="fas fa-building text-blue-600 text-2xl"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800 ml-4">
                                    {{ $instansi->nama_instansi }}
                                </h3>
                            </div>
                            <div class="mb-4">
                                <p class="text-sm text-gray-600">
                                    <i class="fas fa-calendar mr-2 text-gray-500"></i>
                                    Terdaftar:
                                    <span class="font-medium text-gray-700">
                                        {{ $instansi->created_at->format('d M Y') }}
                                    </span>
                                </p>
                            </div>
                            <a href="{{ route('admin.kontrak.show', $instansi->id) }}"
                                class="inline-flex items-center justify-center w-full px-5 py-3 bg-blue-600 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-700 hover:shadow-lg transition duration-300 ease-in-out">
                                <i class="fas fa-file-contract mr-2"></i> Lihat Kontrak Pelanggan
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div
                    class="col-span-full text-center py-16 bg-gray-50 rounded-2xl border border-dashed border-gray-300 hover:border-gray-400 transition duration-300">
                    <i class="fas fa-building text-gray-400 text-7xl mb-4"></i>
                    <p class="text-gray-500 text-lg">Belum ada instansi terdaftar.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
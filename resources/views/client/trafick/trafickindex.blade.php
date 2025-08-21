@extends('layouts.client-dashboard')
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
    </style>
    <div class="container mx-auto px-4 py-10 fade-up">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Grafik Trafik Jaringan Anda</h1>
        <p class="text-center text-gray-600 mb-8">Grafik trafik untuk instansi: <span
                class="font-semibold">{{ $instansi->nama_instansi }}</span></p>

        <div class="bg-white shadow-lg rounded-2xl p-6 mb-8">
            @forelse($grafiks as $grafik)
                <div class="mb-8">
                    <div class="grid grid-cols-2 gap-6">
                        @if($grafik->url_2jam)
                            <div class="bg-blue-50 rounded-lg shadow p-4 cursor-pointer"
                                onclick="openPopup('{{ html_entity_decode($grafik->url_2jam) }}', 'Grafik 2 Jam')">
                                <h3 class="text-sm font-medium text-blue-600 mb-2">Grafik 2 Jam</h3>
                                <img src="{{ html_entity_decode($grafik->url_2jam) }}" alt="Grafik 2 Jam"
                                    class="w-full h-auto rounded">
                            </div>
                        @endif
                        @if($grafik->url_24jam)
                            <div class="bg-blue-50 rounded-lg shadow p-4 cursor-pointer"
                                onclick="openPopup('{{ html_entity_decode($grafik->url_24jam) }}', 'Grafik 24 Jam')">
                                <h3 class="text-sm font-medium text-blue-600 mb-2">Grafik 24 Jam</h3>
                                <img src="{{ html_entity_decode($grafik->url_24jam) }}" alt="Grafik 24 Jam"
                                    class="w-full h-auto rounded">
                            </div>
                        @endif
                        @if($grafik->url_30hari)
                            <div class="bg-blue-50 rounded-lg shadow p-4 cursor-pointer"
                                onclick="openPopup('{{ html_entity_decode($grafik->url_30hari) }}', 'Grafik 30 Hari')">
                                <h3 class="text-sm font-medium text-blue-600 mb-2">Grafik 30 Hari</h3>
                                <img src="{{ html_entity_decode($grafik->url_30hari) }}" alt="Grafik 30 Hari"
                                    class="w-full h-auto rounded">
                            </div>
                        @endif
                        @if($grafik->url_365hari)
                            <div class="bg-blue-50 rounded-lg shadow p-4 cursor-pointer"
                                onclick="openPopup('{{ html_entity_decode($grafik->url_365hari) }}', 'Grafik 365 Hari')">
                                <h3 class="text-sm font-medium text-blue-600 mb-2">Grafik 365 Hari</h3>
                                <img src="{{ html_entity_decode($grafik->url_365hari) }}" alt="Grafik 365 Hari"
                                    class="w-full h-auto rounded">
                            </div>
                        @endif
                    </div>
                </div>
            @empty
                <div class="text-center py-12">
                    <i class="fas fa-chart-bar text-gray-400 text-6xl mb-4"></i>
                    <p class="text-gray-500 text-lg">Belum ada grafik trafik untuk instansi Anda.</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Popup Modal -->
    <div id="popup" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-lg w-full max-w-4xl max-h-screen p-4 relative flex flex-col items-center">
            <div class="flex justify-between items-center mb-4 w-full border-b pb-3">
                <h2 id="popup-title" class="text-lg font-semibold text-gray-800"></h2>
                <button onclick="closePopup()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="overflow-auto max-h-[70vh] w-full flex justify-center items-center">
                <img id="popup-image" src="" alt="Grafik Trafik" class="w-full h-auto rounded">
            </div>
        </div>
    </div>
    <script>
        function openPopup(src, title) {
            document.getElementById('popup-image').src = src;
            document.getElementById('popup-title').textContent = title;
            document.getElementById('popup').classList.remove('hidden');
            document.getElementById('popup').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
        function closePopup() {
            document.getElementById('popup').classList.add('hidden');
            document.getElementById('popup').classList.remove('flex');
            document.body.style.overflow = '';
        }
        document.getElementById('popup').addEventListener('click', function (e) {
            if (e.target === this) closePopup();
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closePopup();
        });
    </script>
@endsection
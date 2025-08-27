@extends('layouts.client-dashboard')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">RECORD MAINTENANCE - {{ $instansi->nama_instansi }}
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($records as $record)
                <div class="bg-white shadow-lg rounded-2xl p-6 mb-4">
                    <div class="mb-2">
                        <span
                            class="px-3 py-1 rounded-full text-xs font-semibold {{ $record->jenis == 'Kunjungan' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800' }}">
                            {{ $record->jenis }}
                        </span>
                    </div>
                    <div class="mb-2">
                        <strong>Keluhan/Kendala:</strong>
                        <div class="text-gray-700">{{ $record->keluhan }}</div>
                    </div>
                    <div class="mb-2">
                        <strong>Status Pekerjaan:</strong>
                        <div class="text-gray-700">{{ $record->status }}</div>
                    </div>
                    @if($record->gambar)
                        <div class="mb-2">
                            <strong>Gambar:</strong><br>
                            <div class="flex flex-wrap gap-2 mt-2">
                                @foreach(json_decode($record->gambar, true) ?? [] as $img)
                                    <img src="{{ asset('storage/' . $img) }}" alt="Gambar Maintenance"
                                        class="w-32 h-32 object-cover rounded cursor-pointer"
                                        onclick="openImagePopup('{{ asset('storage/' . $img) }}')">
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <div class="text-xs text-gray-500 mt-2">Tanggal: {{ $record->created_at->format('d M Y H:i') }}</div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <i class="fas fa-file-alt text-gray-400 text-6xl mb-4"></i>
                    <p class="text-gray-500 text-lg">Belum ada record maintenance untuk instansi ini.</p>
                </div>
            @endforelse
        </div>
        <div class="text-center mt-8">
            <a href="{{ route('client.dashboard') }}"
                class="px-6 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition-colors">
                <i class="fas fa-arrow-left mr-2"></i>Kembali ke Dashboard
            </a>
        </div>
    </div>

    <!-- Popup Modal for Image -->
    <div id="image-popup" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center">
        <div class="bg-white rounded-lg w-full max-w-2xl max-h-screen p-4 relative flex flex-col items-center">
            <button onclick="closeImagePopup()"
                class="absolute top-2 right-4 text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
            <img id="popup-img" src="" alt="Full Maintenance Image"
                class="w-full h-auto max-h-[70vh] object-contain rounded">
        </div>
    </div>

    <script>
        function openImagePopup(src) {
            document.getElementById('popup-img').src = src;
            document.getElementById('image-popup').classList.remove('hidden');
            document.getElementById('image-popup').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
        function closeImagePopup() {
            document.getElementById('image-popup').classList.add('hidden');
            document.getElementById('image-popup').classList.remove('flex');
            document.body.style.overflow = '';
        }
        document.getElementById('image-popup').addEventListener('click', function (e) {
            if (e.target === this) closeImagePopup();
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeImagePopup();
        });
    </script>
@endsection
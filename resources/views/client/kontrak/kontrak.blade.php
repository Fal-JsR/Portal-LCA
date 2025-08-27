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

        .pdf-preview {
            cursor: pointer;
            transition: box-shadow 0.2s;
        }

        .pdf-preview:hover {
            box-shadow: 0 0 0 4px #6366f133;
        }

        .btn-fullscreen {
            margin-top: 8px;
            padding: 0.5rem 1.25rem;
            background: #3b82f6;
            color: #fff;
            border-radius: 0.5rem;
            font-weight: 500;
            box-shadow: 0 2px 8px 0 rgba(59, 130, 246, 0.08);
            transition: background 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn-fullscreen:hover {
            background: #2563eb;
        }
    </style>
    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 fade-up mb-8">
            KONTRAK PELANGGAN - {{ $instansi->nama_instansi }}
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 fade-up">
            <!-- Card Kontrak PDF -->
            <div
                class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 flex flex-col items-center justify-center col-span-2 mx-auto">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-file-contract text-green-600 mr-2"></i> Kontrak PDF
                </h3>
                @if($kontrak && $kontrak->kontrak_pdf)
                    <div class="w-full flex flex-col items-center">
                        <div class="w-full h-80 sm:h-96 mb-2 pdf-preview rounded overflow-hidden border border-gray-200"
                            onclick="openPdfPopup('{{ asset('storage/' . $kontrak->kontrak_pdf) }}')">
                            <iframe src="{{ asset('storage/' . $kontrak->kontrak_pdf) }}" width="100%" height="100%"
                                class="rounded"></iframe>
                        </div>
                        <button type="button" class="btn-fullscreen"
                            onclick="openPdfPopup('{{ asset('storage/' . $kontrak->kontrak_pdf) }}')">
                            Perbesar
                        </button>
                    </div>
                @else
                    <div class="w-full text-center text-gray-500 py-12">
                        <i class="fas fa-file-contract text-5xl mb-4"></i>
                        <p>Belum ada file kontrak yang diupload oleh admin.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- PDF Popup Modal -->
    <div id="pdf-popup" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center">
        <div class="bg-white rounded-lg w-full max-w-3xl max-h-screen p-4 relative flex flex-col items-center">
            <button onclick="closePdfPopup()"
                class="absolute top-2 right-4 text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
            <iframe id="pdf-frame" src="" width="100%" height="600px" class="rounded"></iframe>
        </div>
    </div>

    <script>
        function openPdfPopup(src) {
            document.getElementById('pdf-frame').src = src;
            document.getElementById('pdf-popup').classList.remove('hidden');
            document.getElementById('pdf-popup').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
        function closePdfPopup() {
            document.getElementById('pdf-popup').classList.add('hidden');
            document.getElementById('pdf-popup').classList.remove('flex');
            document.getElementById('pdf-frame').src = '';
            document.body.style.overflow = '';
        }
        document.getElementById('pdf-popup').addEventListener('click', function (e) {
            if (e.target === this) closePdfPopup();
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closePdfPopup();
        });
    </script>
@endsection
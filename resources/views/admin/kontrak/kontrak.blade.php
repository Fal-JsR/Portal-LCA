@extends('layouts.admin-dashboard')
@section('content')
<style>
    @keyframes fadeUp {
        0% { opacity: 0; transform: translateY(20px);}
        100% { opacity: 1; transform: translateY(0);}
    }
    .fade-up { animation: fadeUp 0.6s ease forwards; }
    .pdf-preview { cursor: pointer; transition: box-shadow 0.2s; }
    .pdf-preview:hover { box-shadow: 0 0 0 4px #6366f133; }
</style>
<div class="container mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center text-gray-800 fade-up mb-8">
        KONTRAK PELANGGAN - {{ $instansi->nama_instansi }}
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 fade-up">
        <!-- Card Form PDF -->
        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 flex flex-col items-center justify-center">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-file-alt text-indigo-600 mr-2"></i> Form PDF
            </h3>
            @if($kontrak && $kontrak->form_pdf)
                <div class="w-full flex flex-col items-center">
                    <div class="w-full h-80 sm:h-96 mb-2 pdf-preview rounded overflow-hidden border border-gray-200" onclick="openPdfPopup('{{ asset('storage/' . $kontrak->form_pdf) }}')">
                        <iframe src="{{ asset('storage/' . $kontrak->form_pdf) }}" width="100%" height="100%" class="rounded"></iframe>
                    </div>
                    <button onmousedown="showPdfOptions('form', '{{ $kontrak->id }}')" 
                        class="w-full px-4 py-2 bg-gray-200 text-gray-700 rounded-lg shadow hover:bg-gray-300 transition duration-300">
                        <i class="fas fa-edit mr-2"></i>Edit/Hapus
                    </button>
                </div>
            @else
                <form action="{{ route('admin.kontrak.upload', [$instansi->id, 'form']) }}" method="POST" enctype="multipart/form-data" class="w-full">
                    @csrf
                    <input type="file" name="pdf" accept="application/pdf" class="mb-4 w-full px-3 py-2 border rounded" required>
                    <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">Upload Form PDF</button>
                </form>
            @endif
        </div>
        <!-- Card Kontrak PDF -->
        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 flex flex-col items-center justify-center">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-file-contract text-green-600 mr-2"></i> Kontrak PDF
            </h3>
            @if($kontrak && $kontrak->kontrak_pdf)
                <div class="w-full flex flex-col items-center">
                    <div class="w-full h-80 sm:h-96 mb-2 pdf-preview rounded overflow-hidden border border-gray-200" onclick="openPdfPopup('{{ asset('storage/' . $kontrak->kontrak_pdf) }}')">
                        <iframe src="{{ asset('storage/' . $kontrak->kontrak_pdf) }}" width="100%" height="100%" class="rounded"></iframe>
                    </div>
                    <button onmousedown="showPdfOptions('kontrak', '{{ $kontrak->id }}')" 
                        class="w-full px-4 py-2 bg-gray-200 text-gray-700 rounded-lg shadow hover:bg-gray-300 transition duration-300">
                        <i class="fas fa-edit mr-2"></i>Edit/Hapus
                    </button>
                </div>
            @else
                <form action="{{ route('admin.kontrak.upload', [$instansi->id, 'kontrak']) }}" method="POST" enctype="multipart/form-data" class="w-full">
                    @csrf
                    <input type="file" name="pdf" accept="application/pdf" class="mb-4 w-full px-3 py-2 border rounded" required>
                    <button type="submit" class="w-full px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">Upload Kontrak PDF</button>
                </form>
            @endif
        </div>
    </div>
</div>

<!-- PDF Popup Modal -->
<div id="pdf-popup" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg w-full max-w-3xl max-h-screen p-4 relative flex flex-col items-center">
        <button onclick="closePdfPopup()" class="absolute top-2 right-4 text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
        <iframe id="pdf-frame" src="" width="100%" height="600px" class="rounded"></iframe>
    </div>
</div>

<!-- Edit/Hapus PDF Options Modal -->
<div id="pdf-options-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg w-full max-w-sm p-6 relative flex flex-col items-center">
        <button onclick="closePdfOptions()" class="absolute top-2 right-4 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Opsi PDF</h2>
        <form id="editPdfForm" method="POST" enctype="multipart/form-data" class="w-full mb-3">
            @csrf
            @method('PUT')
            <input type="file" name="pdf" accept="application/pdf" class="mb-4 w-full px-3 py-2 border rounded" required>
            <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Edit PDF</button>
        </form>
        <form id="deletePdfForm" method="POST" class="w-full">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">Hapus PDF</button>
        </form>
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
    function showPdfOptions(type, id) {
        document.getElementById('editPdfForm').action = `/admin/kontrak/${id}/edit/${type}`;
        document.getElementById('deletePdfForm').action = `/admin/kontrak/${id}/delete/${type}`;
        document.getElementById('pdf-options-modal').classList.remove('hidden');
        document.getElementById('pdf-options-modal').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }
    function closePdfOptions() {
        document.getElementById('pdf-options-modal').classList.add('hidden');
        document.getElementById('pdf-options-modal').classList.remove('flex');
        document.body.style.overflow = '';
    }
    document.getElementById('pdf-popup').addEventListener('click', function(e) {
        if (e.target === this) closePdfPopup();
    });
    document.getElementById('pdf-options-modal').addEventListener('click', function(e) {
        if (e.target === this) closePdfOptions();
    });
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closePdfPopup();
            closePdfOptions();
        }
    });
</script>
@endsection

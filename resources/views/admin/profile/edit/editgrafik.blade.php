@extends('layouts.admin-dashboard')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">EDIT GRAFIK INSTANSI</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white shadow-lg rounded-2xl overflow-hidden mb-6">
            <div class="px-6 py-4 bg-gray-50 border-b">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-chart-area mr-2"></i>Daftar Grafik Instansi
                </h3>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Instansi</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($grafiks as $grafik)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">{{ $grafik->instansi->nama_instansi ?? '-' }}</td>
                                <td class="px-6 py-4">
                                    <button
                                        onclick="openEditModal({{ $grafik->id }}, '{{ $grafik->instansi_id }}', '{{ $grafik->nama }}', '{{ addslashes($grafik->url_2jam) }}', '{{ addslashes($grafik->url_24jam) }}', '{{ addslashes($grafik->url_30hari) }}', '{{ addslashes($grafik->url_365hari) }}')"
                                        class="text-indigo-600 hover:text-indigo-900 mr-3">
                                        <i class="fas fa-edit mr-1"></i>Edit
                                    </button>
                                    <button onclick="deleteGrafik({{ $grafik->id }}, '{{ $grafik->nama }}')"
                                        class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-trash mr-1"></i>Hapus
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                    <i class="fas fa-chart-area text-4xl mb-2"></i>
                                    <p>Belum ada grafik instansi.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('admin.edit') }}"
                class="px-6 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition-colors">
                <i class="fas fa-arrow-left mr-2"></i>Kembali ke Menu Edit
            </a>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
        <div class="bg-white rounded-lg w-11/12 max-w-lg p-6 relative">
            <div class="flex justify-between items-center mb-4 border-b pb-3">
                <h2 class="text-xl font-semibold text-gray-800">Edit Grafik</h2>
                <button onclick="closeEditModal()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="edit_instansi_id" class="block text-sm font-medium text-gray-700 mb-2">Instansi</label>
                    <select id="edit_instansi_id" name="instansi_id"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md" required>
                        @foreach($instansis as $instansi)
                            <option value="{{ $instansi->id }}">{{ $instansi->nama_instansi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="edit_nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Grafik</label>
                    <input type="text" id="edit_nama" name="nama" class="w-full px-3 py-2 border border-gray-300 rounded-md"
                        required>
                </div>
                <div class="mb-4">
                    <label for="edit_url_2jam" class="block text-sm font-medium text-gray-700 mb-2">URL 2 Jam</label>
                    <input type="url" id="edit_url_2jam" name="url_2jam"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="edit_url_24jam" class="block text-sm font-medium text-gray-700 mb-2">URL 24 Jam</label>
                    <input type="url" id="edit_url_24jam" name="url_24jam"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="edit_url_30hari" class="block text-sm font-medium text-gray-700 mb-2">URL 30 Hari</label>
                    <input type="url" id="edit_url_30hari" name="url_30hari"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="edit_url_365hari" class="block text-sm font-medium text-gray-700 mb-2">URL 365 Hari</label>
                    <input type="url" id="edit_url_365hari" name="url_365hari"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeEditModal()"
                        class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Update</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
        <div class="bg-white rounded-lg w-11/12 max-w-md p-6 relative">
            <div class="flex justify-between items-center mb-4 border-b pb-3">
                <h2 class="text-xl font-semibold text-gray-800">Konfirmasi Hapus</h2>
                <button onclick="closeDeleteModal()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            <div class="mb-4">
                <p class="text-gray-700">Apakah Anda yakin ingin menghapus grafik <strong id="deleteGrafikName"></strong>?
                </p>
                <p class="text-red-600 text-sm mt-2">Tindakan ini tidak dapat dibatalkan!</p>
            </div>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex justify-end space-x-3">
                    <button type="button" onclick="closeDeleteModal()"
                        class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Hapus</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openEditModal(id, instansi_id, nama, url_2jam, url_24jam, url_30hari, url_365hari) {
            document.getElementById('edit_instansi_id').value = instansi_id;
            document.getElementById('edit_nama').value = nama;
            document.getElementById('edit_url_2jam').value = url_2jam;
            document.getElementById('edit_url_24jam').value = url_24jam;
            document.getElementById('edit_url_30hari').value = url_30hari;
            document.getElementById('edit_url_365hari').value = url_365hari;
            document.getElementById('editForm').action = `/admin/grafik/${id}`;
            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('editModal').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
            document.getElementById('editModal').classList.remove('flex');
            document.body.style.overflow = '';
        }
        function deleteGrafik(id, nama) {
            document.getElementById('deleteGrafikName').textContent = nama;
            document.getElementById('deleteForm').action = `/admin/grafik/${id}`;
            document.getElementById('deleteModal').classList.remove('hidden');
            document.getElementById('deleteModal').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
            document.getElementById('deleteModal').classList.remove('flex');
            document.body.style.overflow = '';
        }
        document.getElementById('editModal').addEventListener('click', function (e) {
            if (e.target === this) closeEditModal();
        });
        document.getElementById('deleteModal').addEventListener('click', function (e) {
            if (e.target === this) closeDeleteModal();
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeEditModal();
                closeDeleteModal();
            }
        });
    </script>
@endsection
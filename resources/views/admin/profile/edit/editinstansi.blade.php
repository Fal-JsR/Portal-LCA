@extends('layouts.admin-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">EDIT INSTANSI</h1>

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

    <!-- List Instansi -->
    <div class="bg-white shadow-lg rounded-2xl overflow-hidden mb-6">
        <div class="px-6 py-4 bg-gray-50 border-b">
            <h3 class="text-lg font-semibold text-gray-800">
                <i class="fas fa-building mr-2"></i>Daftar Instansi
            </h3>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Instansi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dibuat</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($instansis as $instansi)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $instansi->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                    <i class="fas fa-building text-blue-600"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">{{ $instansi->nama_instansi }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $instansi->users->count() }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $instansi->created_at->format('d M Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button onclick="openEditModal({{ $instansi->id }}, '{{ $instansi->nama_instansi }}')" 
                                    class="text-indigo-600 hover:text-indigo-900 mr-3">
                                <i class="fas fa-edit mr-1"></i>Edit
                            </button>
                            <button onclick="deleteInstansi({{ $instansi->id }}, '{{ $instansi->nama_instansi }}')" 
                                    class="text-red-600 hover:text-red-900">
                                <i class="fas fa-trash mr-1"></i>Hapus
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                            <i class="fas fa-building text-4xl mb-2"></i>
                            <p>Belum ada instansi terdaftar.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Kembali ke menu edit -->
    <div class="text-center">
        <a href="{{ route('admin.edit') }}" class="px-6 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i>Kembali ke Menu Edit
        </a>
    </div>
</div>

<!-- Edit Modal -->
<div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg w-11/12 max-w-md p-6 relative">
        <div class="flex justify-between items-center mb-4 border-b pb-3">
            <h2 class="text-xl font-semibold text-gray-800">Edit Instansi</h2>
            <button onclick="closeEditModal()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        </div>
        
        <form id="editForm" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="edit_nama_instansi" class="block text-sm font-medium text-gray-700 mb-2">Nama Instansi</label>
                <input type="text" id="edit_nama_instansi" name="nama_instansi" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                       required>
            </div>
            
            <div class="flex justify-end space-x-3">
                <button type="button" onclick="closeEditModal()" 
                        class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg w-11/12 max-w-md p-6 relative">
        <div class="flex justify-between items-center mb-4 border-b pb-3">
            <h2 class="text-xl font-semibold text-gray-800">Konfirmasi Hapus</h2>
            <button onclick="closeDeleteModal()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        </div>
        
        <div class="mb-4">
            <p class="text-gray-700">Apakah Anda yakin ingin menghapus instansi <strong id="deleteInstansiName"></strong>?</p>
            <p class="text-red-600 text-sm mt-2">Tindakan ini tidak dapat dibatalkan!</p>
        </div>
        
        <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')
            <div class="flex justify-end space-x-3">
                <button type="button" onclick="closeDeleteModal()" 
                        class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                    Hapus
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openEditModal(id, nama) {
        document.getElementById('edit_nama_instansi').value = nama;
        document.getElementById('editForm').action = `/admin/instansi/${id}`;
        document.getElementById('editModal').classList.remove('hidden');
        document.getElementById('editModal').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
        document.getElementById('editModal').classList.remove('flex');
        document.body.style.overflow = '';
    }

    function deleteInstansi(id, nama) {
        document.getElementById('deleteInstansiName').textContent = nama;
        document.getElementById('deleteForm').action = `/admin/instansi/${id}`;
        document.getElementById('deleteModal').classList.remove('hidden');
        document.getElementById('deleteModal').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
        document.getElementById('deleteModal').classList.remove('flex');
        document.body.style.overflow = '';
    }

    // Close modals when clicking outside
    document.getElementById('editModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeEditModal();
        }
    });

    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeDeleteModal();
        }
    });

    // Close modals with ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeEditModal();
            closeDeleteModal();
        }
    });
</script>
@endsection

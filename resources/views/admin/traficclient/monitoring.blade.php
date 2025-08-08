@extends('layouts.admin-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Header -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    <i class="fas fa-building mr-3 text-blue-600"></i>{{ $instansi->nama_instansi }}
                </h1>
                <p class="text-gray-600 mt-2">Monitoring Traffic & Status</p>
            </div>
            <a href="{{ route('admin.trafik-client') }}" 
               class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                <i class="fas fa-arrow-left mr-2"></i>Kembali
            </a>
        </div>
    </div>


    <!-- Grafik Cards -->
<div class="mt-10">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b">
            <h3 class="text-lg font-semibold text-gray-800">
                <i class="fas fa-chart-area mr-2"></i>Grafik Trafik Instansi
            </h3>
        </div>

        <div class="p-6">
            @forelse($grafiks as $grafik)
                <div class="mb-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        @if($grafik->url_2jam)
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                                    <h3 class="text-sm font-medium">{{ $grafik->nama }} - 2 Jam</h3>
                                </div>
                                <div class="p-3 cursor-pointer" onclick="openPopup('{{ html_entity_decode($grafik->url_2jam) }}', '{{ $grafik->nama }} - 2 Jam')">
                                    <img src="{{ html_entity_decode($grafik->url_2jam) }}" alt="{{ $grafik->nama }} - 2 Jam" class="w-full h-auto">
                                </div>
                            </div>
                        @endif

                        @if($grafik->url_24jam)
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                                    <h3 class="text-sm font-medium">{{ $grafik->nama }} - 24 Jam</h3>
                                </div>
                                <div class="p-3 cursor-pointer" onclick="openPopup('{{ html_entity_decode($grafik->url_24jam) }}', '{{ $grafik->nama }} - 24 Jam')">
                                    <img src="{{ html_entity_decode($grafik->url_24jam) }}" alt="{{ $grafik->nama }} - 24 Jam" class="w-full h-auto">
                                </div>
                            </div>
                        @endif

                        @if($grafik->url_30hari)
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                                    <h3 class="text-sm font-medium">{{ $grafik->nama }} - 30 Hari</h3>
                                </div>
                                <div class="p-3 cursor-pointer" onclick="openPopup('{{ html_entity_decode($grafik->url_30hari) }}', '{{ $grafik->nama }} - 30 Hari')">
                                    <img src="{{ html_entity_decode($grafik->url_30hari) }}" alt="{{ $grafik->nama }} - 30 Hari" class="w-full h-auto">
                                </div>
                            </div>
                        @endif

                        @if($grafik->url_365hari)
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                                    <h3 class="text-sm font-medium">{{ $grafik->nama }} - 365 Hari</h3>
                                </div>
                                <div class="p-3 cursor-pointer" onclick="openPopup('{{ html_entity_decode($grafik->url_365hari) }}', '{{ $grafik->nama }} - 365 Hari')">
                                    <img src="{{ html_entity_decode($grafik->url_365hari) }}" alt="{{ $grafik->nama }} - 365 Hari" class="w-full h-auto">
                                </div>
                            </div>
                        @endif
                    </div>

                    @if(!$grafik->url_2jam && !$grafik->url_24jam && !$grafik->url_30hari && !$grafik->url_365hari)
                        <div class="text-center py-8">
                            <i class="fas fa-chart-bar text-gray-400 text-4xl mb-2"></i>
                            <p class="text-gray-500">Belum ada URL grafik yang tersedia untuk {{ $grafik->nama }}</p>
                        </div>
                    @endif
                </div>
            @empty
                <div class="text-center py-12">
                    <i class="fas fa-chart-bar text-gray-400 text-6xl mb-4"></i>
                    <p class="text-gray-500 text-lg mb-4">Belum ada grafik trafik yang ditambahkan.</p>
                    <a href="{{ route('admin.grafik.create') }}" 
                       class="inline-block px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        <i class="fas fa-plus mr-2"></i>Tambah Grafik
                    </a>
                </div>
            @endforelse
        </div>
    </div>
</div>

    <!-- Users Table -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b">
            <h3 class="text-lg font-semibold text-gray-800">
                <i class="fas fa-users mr-2"></i>Daftar Users
            </h3>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bergabung</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($users as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-gray-300 flex items-center justify-center">
                                    <i class="fas fa-user text-gray-600"></i>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $user->username }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                {{ $user->role === 'admin' ? 'bg-purple-100 text-purple-800' : 'bg-green-100 text-green-800' }}">
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $user->created_at->format('d M Y') }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                            <i class="fas fa-users text-4xl mb-2"></i>
                            <p>Belum ada user terdaftar untuk instansi ini.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Popup Modal -->
<div id="popup" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg w-11/12 max-w-4xl max-h-screen p-6 relative">
        <div class="flex justify-between items-center mb-4 border-b pb-3">
            <h2 id="popup-title" class="text-xl font-semibold text-gray-800"></h2>
            <button onclick="closePopup()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        </div>
        <div class="overflow-auto max-h-96">
            <img id="popup-image" src="" alt="Network Graph" class="w-full h-auto">
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
    
    // Close when clicking outside
    document.getElementById('popup').addEventListener('click', function(e) {
        if (e.target === this) {
            closePopup();
        }
    });
    
    // Close with ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closePopup();
        }
    });
</script>
@endsection

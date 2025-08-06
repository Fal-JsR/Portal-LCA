<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Admin Dashboard' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex flex-col">
            <div class="flex items-center justify-center h-20 border-b border-gray-800">
                <img src="{{ asset('assets/icon.png') }}" alt="LCA Logo" class="h-12">
            </div>

            <nav class="flex-1 overflow-y-auto mt-4 space-y-1 px-4">
                @php
                    $menus = [
                        'Home' => route('admin.dashboard'),
                        'Link' => route('admin.link'),
                        'Trafik LCA' => route('admin.trafik-lca'),
                        'Trafik Client' => '#',
                        'Record Maintenance' => '#',
                        'FAQ' => '#',
                        'Kontak' => '#',
                        'Kontrak Pelanggan' => '#',
                        'Profil' => route('admin.profile'),
                    ];
                @endphp

                @foreach ($menus as $label => $url)
                    <a href="{{ $url }}" class="block py-2 px-3 rounded hover:bg-gray-700 transition">
                        {{ $label }}
                    </a>
                @endforeach
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Topbar -->
            <header class="bg-white shadow p-4 flex justify-end items-center">
                <span class="text-gray-600 mr-4">👋 {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Logout</button>
                </form>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>

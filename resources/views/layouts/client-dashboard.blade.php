<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Client Dashboard' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex flex-col">
            <div class="flex items-center justify-center h-20 border-b border-gray-800">
                <img src="{{ asset('assets/icon.png') }}" alt="LCA Logo" class="h-12">
            </div>

            <nav class="flex-1 overflow-y-auto mt-4 space-y-1 px-4">
                <a href="{{ route('client.dashboard') }}" class="block py-2 px-3 rounded hover:bg-gray-700 transition">
                    Home
                </a>
                <a href="{{ route('client.trafick.index') }}"
                    class="block py-2 px-3 rounded hover:bg-gray-700 transition">
                    Trafik Network
                </a>
                <a href="{{ route('client.record.index') }}"
                    class="block py-2 px-3 rounded hover:bg-gray-700 transition">
                    Record Maintenance
                </a>
                <a href="{{ route('client.profile.index') }}"
                    class="block py-2 px-3 rounded hover:bg-gray-700 transition">
                    Profil
                </a>
                <a href="{{ route('client.kontrak.index') }}"
                    class="block py-2 px-3 rounded hover:bg-gray-700 transition">
                    Kontrak
                </a>

                <!-- FAQ Dropdown Menu -->
                <div class="relative">
                    <button onclick="toggleSidebarDropdown('faqDropdownMenu', 'faqDropdownIcon')"
                        class="w-full flex items-center justify-between py-2 px-3 rounded hover:bg-gray-700 transition">
                        <span>FAQ</span>
                        <i id="faqDropdownIcon" class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div id="faqDropdownMenu" class="hidden mt-1 space-y-1 pl-4">
                        <a href="{{ route('client.faq.fiber') }}"
                            class="flex items-center py-2 px-3 rounded hover:bg-gray-700 transition">
                            <span>FAQ Fiber Optic</span>
                        </a>
                        <a href="{{ route('client.faq.wireless') }}"
                            class="flex items-center py-2 px-3 rounded hover:bg-gray-700 transition">
                            <span>FAQ Wireless</span>
                        </a>
                    </div>
                </div>

                <a href="{{ route('client.kontak') }}" class="block py-2 px-3 rounded hover:bg-gray-700 transition">
                    Kontak
                </a>
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

    <script>
        function toggleSidebarDropdown(dropdownId, iconId) {
            const dropdown = document.getElementById(dropdownId);
            const icon = document.getElementById(iconId);

            // Only one dropdown for client
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                dropdown.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>
</body>

</html>
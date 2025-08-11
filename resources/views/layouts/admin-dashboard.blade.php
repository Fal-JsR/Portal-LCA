<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Admin Dashboard' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex h-screen">
        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden lg:hidden"></div>

        <!-- Sidebar -->
        <aside id="sidebar" class="fixed lg:static w-96 lg:w-64 bg-gray-900 text-white flex flex-col h-full z-50 transform -translate-x-full lg:translate-x-0 transition-transform duration-300">
            <div class="flex items-center justify-center h-24 lg:h-20 border-b border-gray-800 px-6 lg:px-4">
                <img src="{{ asset('assets/icon.png') }}" alt="LCA Logo" class="h-14 lg:h-12">
                <button id="close-sidebar" class="lg:hidden text-white hover:text-gray-300 p-3 absolute right-4">
                    <i class="fas fa-times text-3xl"></i>
                </button>
            </div>

            <nav class="flex-1 overflow-y-auto mt-6 lg:mt-4 space-y-3 lg:space-y-2 px-6 lg:px-4">
                @php
                    $menus = [
                        'Home' => route('admin.dashboard'),
                        'Link' => route('admin.link'),
                        'Trafik LCA' => route('admin.trafik-lca'),
                        'Trafik Client' => route('admin.trafik-client'),
                        'Record Maintenance' => '#',
                        'FAQ' => '#',
                        'Kontak' => route('admin.kontak'),
                        'Kontrak Pelanggan' => '#',
                        'Profil' => route('admin.profile'),
                    ];
                @endphp

                @foreach ($menus as $label => $url)
                    <a href="{{ $url }}" class="block py-5 lg:py-2 px-5 lg:px-3 text-xl lg:text-base rounded-lg hover:bg-gray-700 transition">
                        {{ $label }}
                    </a>
                @endforeach
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col lg:ml-0">
            <!-- Topbar -->
            <header class="bg-white shadow p-6 lg:p-4 flex justify-between items-center">
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden text-gray-600 hover:text-gray-800 p-3">
                    <i class="fas fa-bars text-3xl"></i>
                </button>

                <!-- User Info -->
                <div class="flex items-center ml-auto">
                    <span class="text-gray-600 mr-4 text-base lg:text-base">👋 {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="px-4 py-3 lg:px-4 lg:py-2 text-base lg:text-base bg-red-600 text-white rounded hover:bg-red-700">
                            Logout
                        </button>
                    </form>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-4 lg:p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const sidebar = document.getElementById('sidebar');
        const closeSidebar = document.getElementById('close-sidebar');
        const overlay = document.getElementById('mobile-menu-overlay');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeSidebarFunc() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            document.body.style.overflow = '';
        }

        mobileMenuBtn.addEventListener('click', openSidebar);
        closeSidebar.addEventListener('click', closeSidebarFunc);
        overlay.addEventListener('click', closeSidebarFunc);

        // Close sidebar when clicking on menu items on mobile
        const menuLinks = sidebar.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 1024) {
                    closeSidebarFunc();
                }
            });
        });

        // Handle window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                closeSidebarFunc();
                document.body.style.overflow = '';
            }
        });
    </script>
</body>
</html>

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
                <!-- Home Menu -->
                <a href="{{ route('admin.dashboard') }}" class="block py-5 lg:py-2 px-5 lg:px-3 text-xl lg:text-base rounded-lg hover:bg-gray-700 transition">
                    Home
                </a>

                <!-- Link Dropdown Menu -->
                <div class="relative">
                    <button onclick="toggleSidebarDropdown('linkDropdownMenu', 'linkDropdownIcon')" 
                            class="w-full flex items-center justify-between py-5 lg:py-2 px-5 lg:px-3 text-xl lg:text-base rounded-lg hover:bg-gray-700 transition">
                        <span>Link</span>
                        <i id="linkDropdownIcon" class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    
                    <!-- Dropdown Content -->
                    <div id="linkDropdownMenu" class="hidden mt-2 space-y-1 pl-6 lg:pl-4">
                        <a href="https://drive.google.com/file/d/1Hvq9u-7RM_FdiBbxEbfQWO7yAwTp5aqT/view?pli=1" 
                           target="_blank"
                           class="flex items-center py-3 lg:py-2 px-4 lg:px-3 text-lg lg:text-sm rounded-lg hover:bg-gray-700 transition-colors group">
                            <i class="fas fa-project-diagram text-green-400 mr-3 text-base lg:text-sm"></i>
                            <span>Topologi LCA</span>
                            <i class="fas fa-external-link-alt text-gray-400 ml-auto text-xs"></i>
                        </a>

                        <a href="http://103.156.225.17/cacti/" 
                           target="_blank"
                           class="flex items-center py-3 lg:py-2 px-4 lg:px-3 text-lg lg:text-sm rounded-lg hover:bg-gray-700 transition-colors group">
                            <i class="fas fa-chart-line text-blue-400 mr-3 text-base lg:text-sm"></i>
                            <span>MRTG</span>
                            <i class="fas fa-external-link-alt text-gray-400 ml-auto text-xs"></i>
                        </a>

                        <a href="https://nms-lca.mendek.in/index.htm" 
                           target="_blank"
                           class="flex items-center py-3 lg:py-2 px-4 lg:px-3 text-lg lg:text-sm rounded-lg hover:bg-gray-700 transition-colors group">
                            <i class="fas fa-network-wired text-purple-400 mr-3 text-base lg:text-sm"></i>
                            <span>PRTG</span>
                            <i class="fas fa-external-link-alt text-gray-400 ml-auto text-xs"></i>
                        </a>

                        <a href="https://www.jotform.com/app/242970110347451" 
                           target="_blank"
                           class="flex items-center py-3 lg:py-2 px-4 lg:px-3 text-lg lg:text-sm rounded-lg hover:bg-gray-700 transition-colors group">
                            <i class="fas fa-users text-orange-400 mr-3 text-base lg:text-sm"></i>
                            <span>Portal HRD</span>
                            <i class="fas fa-external-link-alt text-gray-400 ml-auto text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- Trafik LCA Dropdown Menu -->
                <div class="relative">
                    <button onclick="toggleSidebarDropdown('trafikLcaDropdownMenu', 'trafikLcaDropdownIcon')" 
                            class="w-full flex items-center justify-between py-5 lg:py-2 px-5 lg:px-3 text-xl lg:text-base rounded-lg hover:bg-gray-700 transition">
                        <span>Trafik LCA</span>
                        <i id="trafikLcaDropdownIcon" class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    
                    <!-- Dropdown Content -->
                    <div id="trafikLcaDropdownMenu" class="hidden mt-2 space-y-1 pl-6 lg:pl-4">
                        <a href="{{ route('admin.live-monitoring') }}" 
                           class="flex items-center py-3 lg:py-2 px-4 lg:px-3 text-lg lg:text-sm rounded-lg hover:bg-gray-700 transition-colors group">
                            <i class="fas fa-broadcast-tower text-green-400 mr-3 text-base lg:text-sm"></i>
                            <span>Live Monitoring</span>
                        </a>

                        <a href="{{ route('admin.upstream') }}" 
                           class="flex items-center py-3 lg:py-2 px-4 lg:px-3 text-lg lg:text-sm rounded-lg hover:bg-gray-700 transition-colors group">
                            <i class="fas fa-arrow-up text-blue-400 mr-3 text-base lg:text-sm"></i>
                            <span>Upstream</span>
                        </a>

                        <a href="{{ route('admin.downstream') }}" 
                           class="flex items-center py-3 lg:py-2 px-4 lg:px-3 text-lg lg:text-sm rounded-lg hover:bg-gray-700 transition-colors group">
                            <i class="fas fa-arrow-down text-purple-400 mr-3 text-base lg:text-sm"></i>
                            <span>Downstream</span>
                        </a>

                        <a href="{{ route('admin.ping') }}" 
                           class="flex items-center py-3 lg:py-2 px-4 lg:px-3 text-lg lg:text-sm rounded-lg hover:bg-gray-700 transition-colors group">
                            <i class="fas fa-signal text-orange-400 mr-3 text-base lg:text-sm"></i>
                            <span>Ping</span>
                        </a>
                    </div>
                </div>

                <!-- Profil Dropdown Menu -->
                <div class="relative">
                    <button onclick="toggleSidebarDropdown('profilDropdownMenu', 'profilDropdownIcon')" 
                            class="w-full flex items-center justify-between py-5 lg:py-2 px-5 lg:px-3 text-xl lg:text-base rounded-lg hover:bg-gray-700 transition">
                        <span>Profil</span>
                        <i id="profilDropdownIcon" class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    
                    <!-- Dropdown Content -->
                    <div id="profilDropdownMenu" class="hidden mt-2 space-y-1 pl-6 lg:pl-4">
                        <a href="{{ route('admin.register') }}" 
                           class="flex items-center py-3 lg:py-2 px-4 lg:px-3 text-lg lg:text-sm rounded-lg hover:bg-gray-700 transition-colors group">
                            <i class="fas fa-user-plus text-green-400 mr-3 text-base lg:text-sm"></i>
                            <span>Registrasi</span>
                        </a>

                        <a href="{{ route('admin.edit') }}" 
                           class="flex items-center py-3 lg:py-2 px-4 lg:px-3 text-lg lg:text-sm rounded-lg hover:bg-gray-700 transition-colors group">
                            <i class="fas fa-edit text-blue-400 mr-3 text-base lg:text-sm"></i>
                            <span>Edit Data</span>
                        </a>
                    </div>
                </div>

                <!-- FAQ Dropdown Menu -->
                <div class="relative">
                    <button onclick="toggleSidebarDropdown('faqDropdownMenu', 'faqDropdownIcon')" 
                            class="w-full flex items-center justify-between py-5 lg:py-2 px-5 lg:px-3 text-xl lg:text-base rounded-lg hover:bg-gray-700 transition">
                        <span>FAQ</span>
                        <i id="faqDropdownIcon" class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    
                    <!-- Dropdown Content -->
                    <div id="faqDropdownMenu" class="hidden mt-2 space-y-1 pl-6 lg:pl-4">
                        <a href="{{ route('admin.faq.fiber') }}" 
                           class="flex items-center py-3 lg:py-2 px-4 lg:px-3 text-lg lg:text-sm rounded-lg hover:bg-gray-700 transition-colors group">
                            <i class="fas fa-fiber-new text-green-400 mr-3 text-base lg:text-sm"></i>
                            <span>FAQ Fiber Optic</span>
                        </a>
                        <a href="{{ route('admin.faq.wireless') }}" 
                           class="flex items-center py-3 lg:py-2 px-4 lg:px-3 text-lg lg:text-sm rounded-lg hover:bg-gray-700 transition-colors group">
                            <i class="fas fa-wifi text-orange-400 mr-3 text-base lg:text-sm"></i>
                            <span>FAQ Wireless</span>
                        </a>
                    </div>
                </div>

                @php
                    $menus = [
                        'Trafik Client' => route('admin.trafik-client'),
                        'Record Maintenance' => route('admin.record.index'),
                        'Kontak' => route('admin.kontak'),
                        'Kontrak Pelanggan' => '#',
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

        // Sidebar dropdown functionality
        function toggleSidebarDropdown(dropdownId, iconId) {
            const dropdown = document.getElementById(dropdownId);
            const icon = document.getElementById(iconId);
            
            // Close all other dropdowns first
            const allDropdowns = ['linkDropdownMenu', 'trafikLcaDropdownMenu', 'profilDropdownMenu', 'faqDropdownMenu'];
            const allIcons = ['linkDropdownIcon', 'trafikLcaDropdownIcon', 'profilDropdownIcon', 'faqDropdownIcon'];
            
            allDropdowns.forEach((id, index) => {
                if (id !== dropdownId) {
                    const otherDropdown = document.getElementById(id);
                    const otherIcon = document.getElementById(allIcons[index]);
                    if (otherDropdown && !otherDropdown.classList.contains('hidden')) {
                        otherDropdown.style.animation = 'slideUp 0.3s ease-out';
                        otherIcon.style.transform = 'rotate(0deg)';
                        setTimeout(() => {
                            otherDropdown.classList.add('hidden');
                        }, 300);
                    }
                }
            });
            
            if (dropdown.classList.contains('hidden')) {
                // Show dropdown
                dropdown.classList.remove('hidden');
                dropdown.style.animation = 'slideDown 0.3s ease-out';
                icon.style.transform = 'rotate(180deg)';
            } else {
                // Hide dropdown
                dropdown.style.animation = 'slideUp 0.3s ease-out';
                icon.style.transform = 'rotate(0deg)';
                
                setTimeout(() => {
                    dropdown.classList.add('hidden');
                }, 300);
            }
        }

        // Add CSS animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                    max-height: 0;
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                    max-height: 200px;
                }
            }
            
            @keyframes slideUp {
                from {
                    opacity: 1;
                    transform: translateY(0);
                    max-height: 200px;
                }
                to {
                    opacity: 0;
                    transform: translateY(-10px);
                    max-height: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>

@extends('layouts.admin-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">TRAFIK PING LIVE</h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
        <!-- PING LIVE RO DIST LCA MTEN -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING LIVE RO DIST LCA MTEN</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4625&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING LIVE RO DIST LCA MTEN')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4625&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING LIVE RO DIST LCA MTEN" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING LIVE RO FTTH SENTUL -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING LIVE RO FTTH SENTUL</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=2196&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING LIVE RO FTTH SENTUL')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=2196&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING LIVE RO FTTH SENTUL" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING LIVE SW SENTUL -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING LIVE SW SENTUL</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7530&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING LIVE SW SENTUL')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7530&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING LIVE SW SENTUL" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING LIVE RO DIST BMD -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING LIVE RO DIST BMD</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7647&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING LIVE RO DIST BMD')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7647&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING LIVE RO DIST BMD" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING VM PROXMOX -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING VM PROXMOX</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=2126&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING VM PROXMOX')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=2126&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING VM PROXMOX" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING RO DIST POP BOJONG KONENG -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING RO DIST POP BOJONG KONENG</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4700&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING RO DIST POP BOJONG KONENG')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4700&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING RO DIST POP BOJONG KONENG" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING SW POP BOJONG KONENG -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING SW POP BOJONG KONENG</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7503&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING SW POP BOJONG KONENG')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7503&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING SW POP BOJONG KONENG" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING SW POP KWIK -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING SW POP KWIK</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7479&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING SW POP KWIK')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7479&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING SW POP KWIK" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING RO ORGANO -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING RO ORGANO</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7648&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING RO ORGANO')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7648&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING RO ORGANO" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING RO MGP -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING RO MGP</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4901&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING RO MGP')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4901&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING RO MGP" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING RO PT SIGMA -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING RO PT SIGMA</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7382&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING RO PT SIGMA')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7382&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING RO PT SIGMA" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING RO HIGHLENDER -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING RO HIGHLENDER</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7649&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING RO HIGHLENDER')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7649&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING RO HIGHLENDER" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING RO JUNGLE -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING RO JUNGLE</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7650&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING RO JUNGLE')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7650&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING RO JUNGLE" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING RO NABAWI CAFE -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING RO NABAWI CAFE</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7374&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING RO NABAWI CAFE')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7374&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING RO NABAWI CAFE" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING RO TARUNA BANGSA -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING RO TARUNA BANGSA</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7651&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING RO TARUNA BANGSA')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7651&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING RO TARUNA BANGSA" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING RO SMK DARMAWAN -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING RO SMK DARMAWAN</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=6458&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING RO SMK DARMAWAN')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=6458&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING RO SMK DARMAWAN" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING RO STANLEY -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING RO STANLEY</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7391&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING RO STANLEY')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7391&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING RO STANLEY" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- PING RO BUMI GUMATI -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">PING RO BUMI GUMATI</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7402&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'PING RO BUMI GUMATI')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7402&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="PING RO BUMI GUMATI" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>
    </div>
</div>

<!-- Popup Modal -->
<div id="popup" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg w-11/12 max-w-6xl max-h-screen p-6 relative">
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
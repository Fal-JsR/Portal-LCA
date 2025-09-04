@extends('layouts.admin-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">TRAFIK UPSTREAM 24 HOURS</h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- VLAN-708-RBN-IPT -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">VLAN-708-RBN-IPT</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=1&id=4893&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'VLAN-708-RBN-IPT')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=1&id=4893&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="VLAN-708-RBN-IPT" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- VLAN-3151-CBN-IPT -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">VLAN-3151-CBN-IPT</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=1&id=4896&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'VLAN-3151-CBN-IPT')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=1&id=4896&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="VLAN-3151-CBN-IPT" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- VLAN-3152-CBN-KONTEN -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">VLAN-3152-CBN-KONTEN</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=1&id=4897&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'VLAN-3152-CBN-KONTEN')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=1&id=4897&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="VLAN-3152-CBN-KONTEN" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- VLAN-562-JKTIX -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">VLAN-562-JKTIX</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=1&id=4892&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'VLAN-562-JKTIX')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=1&id=4892&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="VLAN-562-JKTIX" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- IIX APJII -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">IIX APJII</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=1&id=4890&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'IIX APJII')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=1&id=4890&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="IIX APJII" class="w-full h-auto transition-transform hover:scale-105">
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
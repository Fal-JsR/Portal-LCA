@extends('layouts.admin-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">TRAFIK MONITORING LIVE</h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
        <!-- IPT RBN -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                <h3 class="text-sm font-medium">IPT RBN</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4893&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'IPT RBN')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4893&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="IPT RBN" class="w-full h-auto">
            </div>
        </div>

        <!-- KONTEN CBN -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                <h3 class="text-sm font-medium">KONTEN CBN</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4897&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'KONTEN CBN')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4897&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="KONTEN CBN" class="w-full h-auto">
            </div>
        </div>

        <!-- JKTIX -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                <h3 class="text-sm font-medium">JKTIX</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4892&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'JKTIX')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4892&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="JKTIX" class="w-full h-auto">
            </div>
        </div>

        <!-- IIX APJII -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                <h3 class="text-sm font-medium">IIX APJII</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4890&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'IIX APJII')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4890&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="IIX APJII" class="w-full h-auto">
            </div>
        </div>

        <!-- LOKALOP ASNET -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                <h3 class="text-sm font-medium">LOKALOP ASNET</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4630&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'LOKALOP ASNET')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4630&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="LOKALOP ASNET" class="w-full h-auto">
            </div>
        </div>

        <!-- POP PINEFOREST -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                <h3 class="text-sm font-medium">POP PINEFOREST</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7558&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'POP PINEFOREST')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7558&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="POP PINEFOREST" class="w-full h-auto">
            </div>
        </div>

        <!-- POP KWIK -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                <h3 class="text-sm font-medium">POP KWIK</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7482&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'POP KWIK')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7482&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="POP KWIK" class="w-full h-auto">
            </div>
        </div>

        <!-- POP DAFA -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                <h3 class="text-sm font-medium">POP DAFA</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7498&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'POP DAFA')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7498&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="POP DAFA" class="w-full h-auto">
            </div>
        </div>

        <!-- POP BOJONG KONENG -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-3 text-center">
                <h3 class="text-sm font-medium">POP BOJONG KONENG</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7506&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'POP BOJONG KONENG')">
                <img src="https://nms.lca.tol.lol/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7506&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="POP BOJONG KONENG" class="w-full h-auto">
            </div>
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
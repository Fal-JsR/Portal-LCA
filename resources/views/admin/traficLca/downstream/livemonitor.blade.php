@extends('layouts.admin-dashboard')

@section('content')
<style>
    @keyframes fadeUp {
        0% { opacity: 0; transform: translateY(20px);}
        100% { opacity: 1; transform: translateY(0);}
    }
    .fade-up { animation: fadeUp 0.6s ease forwards; }
    .card-enhanced {
        border-left: 6px solid #3b82f6;
        transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s, background 0.3s;
    }
    .card-enhanced:hover {
        box-shadow: 0 10px 32px 0 rgba(59,130,246,0.15), 0 2px 4px 0 rgba(0,0,0,0.08);
        transform: scale(1.035);
        border-left-color: #22c55e;
        background: linear-gradient(90deg, #f0f9ff 0%, #e0f7fa 100%);
    }
</style>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800 fade-up">TRAFIK DOWNSTREAM LIVE</h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 fade-up">
        <!-- VLAN-500-BMD-ASNET -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden card-enhanced">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">VLAN-500-BMD-ASNET</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms-1.lca.mendek.in/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4630&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'VLAN-500-BMD-ASNET')">
                <img src="https://nms-1.lca.mendek.in/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=4630&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="VLAN-500-BMD-ASNET" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- LOKALOP POP BOJONG KONENG -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden card-enhanced">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">LOKALOP POP BOJONG KONENG</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms-1.lca.mendek.in/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7506&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'LOKALOP POP BOJONG KONENG')">
                <img src="https://nms-1.lca.mendek.in/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7506&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="LOKALOP POP BOJONG KONENG" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- LOKALOP POP PINEFOREST -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden card-enhanced">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">LOKALOP POP PINEFOREST</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms-1.lca.mendek.in/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7558&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'LOKALOP POP PINEFOREST')">
                <img src="https://nms-1.lca.mendek.in/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7558&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="LOKALOP POP PINEFOREST" class="w-full h-auto transition-transform hover:scale-105">
            </div>
        </div>

        <!-- LOKALOP POP KWIK -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden card-enhanced">
            <div class="bg-blue-600 text-white p-3 text-center">
                <h3 class="text-sm font-medium">LOKALOP POP KWIK</h3>
            </div>
            <div class="p-3 cursor-pointer" onclick="openPopup('https://nms-1.lca.mendek.in/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7482&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27', 'LOKALOP POP KWIK')">
                <img src="https://nms-1.lca.mendek.in/chart.png?type=graph&width=1000&height=400&username=admin&password=Lca@2020!&graphid=0&id=7482&graphstyling=showLegend%3D%271%27+baseFontSize%3D%2717%27" alt="LOKALOP POP KWIK" class="w-full h-auto transition-transform hover:scale-105">
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
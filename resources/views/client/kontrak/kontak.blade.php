@extends('layouts.client-dashboard')
@section('content')
<style>
    @keyframes fadeUp {
        0% { opacity: 0; transform: translateY(20px);}
        100% { opacity: 1; transform: translateY(0);}
    }
    .fade-up { animation: fadeUp 0.6s ease forwards; }
</style>
<div class="max-w-6xl mx-auto py-10 fade-up">
    <!-- Judul -->
    <h2 class="text-center text-2xl font-bold mb-8">Hubungi Kami</h2>

    <!-- Grid Card -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="flex items-center text-lg font-semibold text-blue-600 mb-4">
                <i class="fas fa-headset mr-2"></i> Customer Service
            </h3>
            <div class="space-y-4">
                <a href="https://wa.me/+6285881784140" target="_blank" class="flex items-center p-3 rounded-lg bg-green-100 hover:bg-green-200 transition-colors cursor-pointer">
                    <i class="fab fa-whatsapp text-green-500 text-xl mr-3"></i>
                    <span>0858-8178-4140</span>
                </a>
                <div class="flex items-center p-3 rounded-lg bg-gray-200">
                    <i class="fas fa-comments text-gray-600 text-xl mr-3"></i>
                    <span>Live Chat (ikon kanan bawah)</span>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="flex items-center text-lg font-semibold text-blue-600 mb-4">
                <i class="fas fa-building mr-2"></i> Corporate Operation Center
            </h3>
            <div class="space-y-4">
                <a href="https://wa.me/+6281212499465" target="_blank" class="flex items-center p-3 rounded-lg bg-green-100 hover:bg-green-200 transition-colors cursor-pointer">
                    <i class="fab fa-whatsapp text-green-500 text-xl mr-3"></i>
                    <span>0812-1249-9465</span>
                </a>
                <a href="mailto:coc@lca.co.id" class="flex items-center p-3 rounded-lg bg-blue-100 hover:bg-blue-200 transition-colors cursor-pointer">
                    <i class="fas fa-envelope text-blue-500 text-xl mr-3"></i>
                    <span>coc@lca.co.id</span>
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="flex items-center text-lg font-semibold text-blue-600 mb-4">
                <i class="fas fa-network-wired mr-2"></i> Network Operation Center
            </h3>
            <div class="space-y-4">
                <a href="https://wa.me/+6285770853775" target="_blank" class="flex items-center p-3 rounded-lg bg-green-100 hover:bg-green-200 transition-colors cursor-pointer">
                    <i class="fab fa-whatsapp text-green-500 text-xl mr-3"></i>
                    <span>0857-7085-3775</span>
                </a>
                <a href="mailto:noc@lca.co.id" class="flex items-center p-3 rounded-lg bg-blue-100 hover:bg-blue-200 transition-colors cursor-pointer">
                    <i class="fas fa-envelope text-blue-500 text-xl mr-3"></i>
                    <span>noc@lca.co.id</span>
                </a>
            </div>
        </div>

    </div>

    <!-- Lokasi Kami -->
    <div class="mt-10">
        <h2 class="text-center text-2xl font-bold mb-6">Lokasi Kami</h2>
        <div class="rounded-2xl overflow-hidden shadow-lg">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6358894819355!2d106.8635234750406!3d-6.567556793425691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c71ef8409a65%3A0x4731ca3bea89e471!2sPt.%20Lintas%20Citra%20Abadi!5e0!3m2!1sen!2sid!4v1754906891240!5m2!1sen!2sid" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

</div>
@endsection

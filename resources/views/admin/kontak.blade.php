@extends('layouts.admin-dashboard')
@section('content')
<div class="max-w-6xl mx-auto py-10">
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
</div>
@endsection
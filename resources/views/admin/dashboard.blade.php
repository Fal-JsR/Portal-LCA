@extends('layouts.admin-dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Selamat Datang di Portal Monitoring</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- MRTG Analytic -->
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">MRTG Analytics</h2>
            <p class="text-gray-600 mb-4">Lihat grafik trafik jaringan secara real-time.</p>
            <a href="http://103.156.225.17/cacti/" target="_blank" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Kunjungi</a>
        </div>

        <!-- PRTG Monitor -->
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">PRTG Monitor</h2>
            <p class="text-gray-600 mb-4">Pantau performa perangkat jaringan dengan PRTG.</p>
            <a href="https://nms-lca.mendek.in/index.htm" target="_blank" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Kunjungi</a>
        </div>

        <!-- Contact Us -->
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Contact Us</h2>
            <p class="text-gray-600 mb-4">Hubungi kami untuk bantuan dan pertanyaan.</p>
            <a href="{{ route('contact') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Kunjungi</a>
        </div>

        <!-- Profile -->
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Profile</h2>
            <p class="text-gray-600 mb-4">Lihat dan kelola profil Anda.</p>
            <a href="{{ route("admin.profile") }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Kunjungi</a>
        </div>

        <!-- FAQ Fiber Optic -->
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">FAQ Fiber Optic</h2>
            <p class="text-gray-600 mb-4">Temukan jawaban seputar layanan fiber optic.</p>
            <a href="{{ route('faq.fiber') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Kunjungi</a>
        </div>

        <!-- FAQ Wireless / Network AI -->
        <div class="bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">FAQ Wireless & Network AI</h2>
            <p class="text-gray-600 mb-4">Pelajari solusi wireless dan AI untuk jaringan.</p>
            <a href="{{ route('faq.wireless') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Kunjungi</a>
        </div>
    </div>
</div>
@endsection

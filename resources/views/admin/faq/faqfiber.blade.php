@extends('layouts.admin-dashboard')

@section('content')
<style>
    @keyframes fadeUp {
        0% { opacity: 0; transform: translateY(20px);}
        100% { opacity: 1; transform: translateY(0);}
    }
    .fade-up { animation: fadeUp 0.6s ease forwards; }
</style>
<div class="container mx-auto px-4 py-10">
    <h1 class="text-4xl font-extrabold text-center text-blue-600 tracking-wide fade-up mb-2">Frequently Asked Question (FAQ) Fiber Optic</h1>
    <span class="block w-28 h-1 bg-gradient-to-r from-blue-500 to-green-500 mx-auto mb-8 rounded-full fade-up"></span>
    <p class="text-center text-gray-600 mb-8 fade-up">Panduan troubleshooting untuk masalah koneksi fiber optic</p>

    <div class="max-w-4xl mx-auto space-y-4 fade-up">
        <!-- FAQ Item 1 -->
        <div class="faq-item bg-blue-50 rounded-2xl overflow-hidden shadow-md">
            <div class="faq-question px-6 py-4 cursor-pointer flex items-center justify-between font-semibold text-gray-800 hover:bg-blue-100 transition-colors" onclick="toggleFAQ(this)">
                <span class="flex items-center gap-3">
                    <span class="text-xl">🔗</span>
                    <span>1. Lampu Indikator Loss?</span>
                </span>
                <span class="faq-icon text-gray-500 transition-transform duration-300">▼</span>
            </div>
            <div class="faq-answer hidden px-6 pb-4 bg-white">
                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li>Customer memastikan kabel petcore kuning tidak putus atau terlipat</li>
                    <li>Customer memastikan jek petcore yang berwarna biru sudah tercolok dengan benar</li>
                    <li>Pastikan lampu internet nyala</li>
                    <li>Hubungi CS atau COC Licamedia</li>
                </ul>
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="faq-item bg-blue-50 rounded-2xl overflow-hidden shadow-md">
            <div class="faq-question px-6 py-4 cursor-pointer flex items-center justify-between font-semibold text-gray-800 hover:bg-blue-100 transition-colors" onclick="toggleFAQ(this)">
                <span class="flex items-center gap-3">
                    <span class="text-xl">💡</span>
                    <span>2. Lampu Indikator Internet di Modem mati?</span>
                </span>
                <span class="faq-icon text-gray-500 transition-transform duration-300">▼</span>
            </div>
            <div class="faq-answer hidden px-6 pb-4 bg-white">
                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li>Pastikan adaptor terhubung dengan baik</li>
                    <li>Restart modem</li>
                    <li>Hubungi CS jika masalah berlanjut</li>
                </ul>
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="faq-item bg-blue-50 rounded-2xl overflow-hidden shadow-md">
            <div class="faq-question px-6 py-4 cursor-pointer flex items-center justify-between font-semibold text-gray-800 hover:bg-blue-100 transition-colors" onclick="toggleFAQ(this)">
                <span class="flex items-center gap-3">
                    <span class="text-xl">⏻</span>
                    <span>3. Internet Putus Nyambung?</span>
                </span>
                <span class="faq-icon text-gray-500 transition-transform duration-300">▼</span>
            </div>
            <div class="faq-answer hidden px-6 pb-4 bg-white">
                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li>Cek kualitas sinyal</li>
                    <li>Gunakan kabel LAN untuk koneksi stabil</li>
                    <li>Restart router/modem</li>
                    <li>Hubungi teknisi jika masalah berlanjut</li>
                </ul>
            </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="faq-item bg-blue-50 rounded-2xl overflow-hidden shadow-md">
            <div class="faq-question px-6 py-4 cursor-pointer flex items-center justify-between font-semibold text-gray-800 hover:bg-blue-100 transition-colors" onclick="toggleFAQ(this)">
                <span class="flex items-center gap-3">
                    <span class="text-xl">🔑</span>
                    <span>4. Cara mengubah password WiFi ONT ZTE GPON</span>
                </span>
                <span class="faq-icon text-gray-500 transition-transform duration-300">▼</span>
            </div>
            <div class="faq-answer hidden px-6 pb-4 bg-white">
                <div class="text-gray-700 space-y-2">
                    <p>Langkah-langkah mengubah password WiFi:</p>
                    <ol class="list-decimal list-inside space-y-1 ml-4">
                        <li>Buka browser dan masuk ke alamat IP ONT (biasanya 192.168.1.1)</li>
                        <li>Login dengan username dan password admin</li>
                        <li>Masuk ke menu Network → WLAN → Security</li>
                        <li>Ubah WPA/WPA2 Passphrase dengan password baru</li>
                        <li>Klik Apply/Save untuk menyimpan perubahan</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="faq-item bg-blue-50 rounded-2xl overflow-hidden shadow-md">
            <div class="faq-question px-6 py-4 cursor-pointer flex items-center justify-between font-semibold text-gray-800 hover:bg-blue-100 transition-colors" onclick="toggleFAQ(this)">
                <span class="flex items-center gap-3">
                    <span class="text-xl">🔒</span>
                    <span>5. Cara mengubah password WiFi ONT Huawei/ZTE EPON</span>
                </span>
                <span class="faq-icon text-gray-500 transition-transform duration-300">▼</span>
            </div>
            <div class="faq-answer hidden px-6 pb-4 bg-white">
                <div class="text-gray-700 space-y-2">
                    <p>Langkah-langkah untuk ONT Huawei/ZTE EPON:</p>
                    <ol class="list-decimal list-inside space-y-1 ml-4">
                        <li>Akses web interface melalui browser (192.168.1.1 atau 192.168.100.1)</li>
                        <li>Login dengan kredensial yang tersedia</li>
                        <li>Navigasi ke WLAN → Security Settings</li>
                        <li>Ubah Pre-Shared Key dengan password baru</li>
                        <li>Apply perubahan dan restart perangkat</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Back Button -->
    <div class="text-center mt-8 fade-up">
        <a href="{{ route('admin.dashboard') }}" class="px-6 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition-colors">
            <i class="fas fa-arrow-left mr-2"></i>Kembali ke Dashboard
        </a>
    </div>
</div>

<script>
    function toggleFAQ(element) {
        const item = element.closest('.faq-item');
        const answer = item.querySelector('.faq-answer');
        const icon = element.querySelector('.faq-icon');
        
        // Close all other FAQ items
        document.querySelectorAll('.faq-item').forEach(otherItem => {
            if (otherItem !== item) {
                const otherAnswer = otherItem.querySelector('.faq-answer');
                const otherIcon = otherItem.querySelector('.faq-icon');
                otherAnswer.classList.add('hidden');
                otherIcon.textContent = '▼';
                otherIcon.style.transform = 'rotate(0deg)';
            }
        });
        
        // Toggle current item
        if (answer.classList.contains('hidden')) {
            answer.classList.remove('hidden');
            icon.textContent = '▲';
            icon.style.transform = 'rotate(180deg)';
        } else {
            answer.classList.add('hidden');
            icon.textContent = '▼';
            icon.style.transform = 'rotate(0deg)';
        }
    }
</script>
@endsection

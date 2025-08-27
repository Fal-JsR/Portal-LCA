@extends('layouts.admin-dashboard')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col items-center mb-8">
            <div class="bg-blue-500 rounded-xl w-16 h-16 flex items-center justify-center mb-4">
                <i class="fas fa-wifi text-white text-3xl"></i>
            </div>
            <h1 class="text-2xl sm:text-3xl font-bold text-blue-600 text-center mb-2">Frequently Asked Question (FAQ)
                Wireless</h1>
            <p class="text-center text-gray-600">Troubleshooting panduan untuk masalah koneksi internet</p>
        </div>

        <div class="max-w-3xl mx-auto space-y-6">
            <!-- FAQ 1 -->
            <div class="faq-card rounded-2xl shadow bg-blue-50">
                <div class="flex items-center px-6 py-4 cursor-pointer" onclick="toggleFaqWireless(this)">
                    <div class="flex items-center">
                        <div class="bg-pink-200 rounded-lg w-10 h-10 flex items-center justify-center mr-3">
                            <i class="fas fa-plug text-pink-500 text-xl"></i>
                        </div>
                        <span class="font-semibold text-lg text-gray-800">1. Internet Offline?</span>
                    </div>
                    <i class="faq-arrow fas fa-chevron-down ml-auto text-gray-500"></i>
                </div>
                <div class="faq-answer px-8 pb-6 pt-2 hidden">
                    <ul class="list-disc list-inside space-y-2 text-blue-700">
                        <li>Customer mencabut colok adaptor + POE Radio Antena</li>
                        <li>Pastikan kabel LAN dari POE ke arah Radio tidak kendor</li>
                        <li>Pastikan kabel LAN dan POE ke arah Router WiFi tidak kendor</li>
                        <li>Pastikan router WiFi hidup dan lampu indikator semua nyala</li>
                        <li>Hubungi CS atau COC Licamedia</li>
                    </ul>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-card rounded-2xl shadow bg-blue-50">
                <div class="flex items-center px-6 py-4 cursor-pointer" onclick="toggleFaqWireless(this)">
                    <div class="flex items-center">
                        <div class="bg-orange-200 rounded-lg w-10 h-10 flex items-center justify-center mr-3">
                            <i class="fas fa-exchange-alt text-orange-500 text-xl"></i>
                        </div>
                        <span class="font-semibold text-lg text-gray-800">2. Internet atau ping putus nyambung?</span>
                    </div>
                    <i class="faq-arrow fas fa-chevron-down ml-auto text-gray-500"></i>
                </div>
                <div class="faq-answer px-8 pb-6 pt-2 hidden">
                    <ul class="list-disc list-inside space-y-2 text-blue-700">
                        <li>Pastikan kabel LAN dari POE ke arah Radio tidak kendor</li>
                        <li>Pastikan kabel LAN dan POE ke arah Router WiFi tidak kendor</li>
                        <li>Hubungi CS atau COC Licamedia</li>
                    </ul>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-card rounded-2xl shadow bg-blue-50">
                <div class="flex items-center px-6 py-4 cursor-pointer" onclick="toggleFaqWireless(this)">
                    <div class="flex items-center">
                        <div class="bg-cyan-200 rounded-lg w-10 h-10 flex items-center justify-center mr-3">
                            <i class="fas fa-tachometer-alt text-cyan-500 text-xl"></i>
                        </div>
                        <span class="font-semibold text-lg text-gray-800">3. Internet Lemot?</span>
                    </div>
                    <i class="faq-arrow fas fa-chevron-down ml-auto text-gray-500"></i>
                </div>
                <div class="faq-answer px-8 pb-6 pt-2 hidden">
                    <ul class="list-disc list-inside space-y-2 text-blue-700">
                        <li>Hubungi CS atau COC untuk cek limit di queue apakah tersiolir 1k atau tidak? Dan apakah limitnya
                            full merah atau tidak?</li>
                        <li>Jika trafik full, diinfokan ke client: “Saat ini trafik bapak/ibu sedang full sesuai pembelian,
                            kami sarankan untuk naik bandwidth”</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleFaqWireless(element) {
            const card = element.parentElement;
            const answer = card.querySelector('.faq-answer');
            const arrow = element.querySelector('.faq-arrow');
            // Close all other cards
            document.querySelectorAll('.faq-card').forEach(otherCard => {
                if (otherCard !== card) {
                    otherCard.querySelector('.faq-answer').classList.add('hidden');
                    otherCard.querySelector('.faq-arrow').classList.remove('fa-chevron-up');
                    otherCard.querySelector('.faq-arrow').classList.add('fa-chevron-down');
                }
            });
            // Toggle current
            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                arrow.classList.remove('fa-chevron-down');
                arrow.classList.add('fa-chevron-up');
            } else {
                answer.classList.add('hidden');
                arrow.classList.remove('fa-chevron-up');
                arrow.classList.add('fa-chevron-down');
            }
        }
    </script>
@endsection
@extends('layouts.admin-dashboard')
@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">EXPORT RECORD MAINTENANCE</h1>
        <div class="bg-white shadow-lg rounded-2xl p-6 max-w-xl mx-auto">
            <form action="{{ route('admin.record.export.excel') }}" method="GET">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Opsi Export</label>
                    <select name="range" id="range" class="w-full px-3 py-2 border border-gray-300 rounded-md"
                        onchange="toggleCustomDate()" required>
                        <option value="bulan">Per Bulan</option>
                        <option value="minggu">Per Minggu</option>
                        <option value="custom">Custom Tanggal</option>
                    </select>
                </div>
                <div id="bulan-group" class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Pilih Bulan</label>
                    <input type="month" name="bulan" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div id="minggu-group" class="mb-4 hidden">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Pilih Minggu</label>
                    <input type="week" name="minggu" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div id="custom-group" class="mb-4 hidden">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Awal</label>
                    <input type="date" name="start" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    <label class="block text-sm font-medium text-gray-700 mb-2 mt-2">Tanggal Akhir</label>
                    <input type="date" name="end" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition-colors">
                        <i class="fas fa-file-excel mr-2"></i>Export Excel
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function toggleCustomDate() {
            var range = document.getElementById('range').value;
            document.getElementById('bulan-group').classList.toggle('hidden', range !== 'bulan');
            document.getElementById('minggu-group').classList.toggle('hidden', range !== 'minggu');
            document.getElementById('custom-group').classList.toggle('hidden', range !== 'custom');
        }
        document.addEventListener('DOMContentLoaded', toggleCustomDate);
    </script>
@endsection
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portal Perusahaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 to-white min-h-screen flex items-center justify-center">
    <div class="text-center space-y-4">
        <h1 class="text-5xl font-bold text-blue-800">Selamat Datang di Portal Perusahaan</h1>
        <p class="text-lg text-gray-600">Silakan login untuk mengakses dashboard sesuai akun Anda.</p>
        <a href="{{ route('login') }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-xl shadow hover:bg-blue-700 transition">Login</a>
    </div>
</body>
</html>

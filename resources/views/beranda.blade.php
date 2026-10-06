<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Laravel Pertama Saya</title>
    <!-- Tailwind CSS via CDN untuk styling cepat -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center p-6">

    <div class="bg-white shadow-lg rounded-2xl p-8 max-w-md w-full text-center border border-gray-200">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Selamat Datang! 🚀</h1>
        <p class="text-gray-600 mb-6">Ini adalah halaman web sederhana pertama yang dibuat dengan Laravel & Tailwind CSS.</p>

        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded text-left mb-6">
            <p class="text-sm text-blue-700 font-medium">Status System:</p>
            <p class="text-xs text-blue-600 mt-1">Laravel Version: {{ app()->version() }}</p>
        </div>

        <button onclick="alert('Halo dari Laravel!')" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-xl transition duration-200 shadow">
            Klik Saya
        </button>
    </div>
    <nav>
        <a href="beranda"> Beranda </a>
    </nav>

</body>
</html>

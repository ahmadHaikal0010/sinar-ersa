<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Menu</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-gray-800">
            Dapur Mami Ersa
        </h1>
        <a href="{{ route('publik.home') }}"
           class="text-gray-600 hover:text-gray-900">
            Beranda
        </a>
    </div>
</header>

<main class="py-10">
    <div class="max-w-4xl mx-auto px-4">

        <div class="bg-[#e6f0a6] p-6 rounded-2xl shadow-md">

            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                Detail Menu
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">
                        Nama Menu
                    </label>
                    <div class="bg-white p-3 rounded-lg shadow">
                        {{ $menu->nama }}
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">
                        Kategori
                    </label>
                    <div class="bg-white p-3 rounded-lg shadow">
                        {{ $menu->kategori }}
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">
                        Harga
                    </label>
                    <div class="bg-white p-3 rounded-lg shadow font-bold text-green-700">
                        {{ $menu->harga_rupiah }}
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-600 mb-1">
                        Tanggal Dibuat
                    </label>
                    <div class="bg-white p-3 rounded-lg shadow">
                        {{ $menu->created_at->format('d M Y, H:i') }}
                    </div>
                </div>

            </div>

            <div class="flex justify-center gap-4 mt-8">

                <!-- Pesan via WhatsApp -->
                <a
                    href="https://wa.me/6283181441459?text={{ urlencode(
                        'Halo Admin Dapur Mami Ersa 👋' . "\n\n" .
                        'Saya ingin memesan:' . "\n" .
                        '🍽 Menu : ' . $menu->nama . "\n" .
                        '💰 Harga : ' . $menu->harga_rupiah . "\n\n" .
                        'Terima kasih 🙏'
                    ) }}"
                    target="_blank"
                    class="px-6 py-2 bg-[#25D366] text-white rounded-lg hover:bg-green-600 transition"
                >
                    💬 Pesan via WhatsApp
                </a>

                <a href="{{ route('publik.home') }}"
                   class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:opacity-80 transition">
                    ← Kembali
                </a>

            </div>

        </div>
    </div>
</main>

<footer class="bg-white border-t mt-12">
    <div class="max-w-7xl mx-auto px-4 py-4 text-center text-sm text-gray-500">
        © {{ date('Y') }} Dapur Mami Ersa
    </div>
</footer>

</body>
</html>

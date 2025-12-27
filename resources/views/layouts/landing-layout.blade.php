<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dapur Mami Ersa' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FFF7F0]">

    <!-- NAVBAR -->
    <nav class="w-full bg-[#E3C474] text-gray-800 fixed top-0 left-0 shadow-md z-50">
        <div class="max-w-6xl mx-auto flex justify-between items-center p-4">

            <!-- Logo -->
            <h1 class="text-xl font-extrabold text-gray-900">Dapur Mami Ersa</h1>

            <!-- Menu -->
            <div class="flex items-center space-x-6 font-medium">

                <a href="/" class="hover:text-white transition">Beranda</a>

                <!-- DROPDOWN MENU -->
                <div class="relative">
                    <button id="dropdownBtn" class="hover:text-white transition flex items-center gap-1">
                        Menu ▾
                    </button>

                    <!-- Dropdown List -->
                    <div id="dropdownMenu"
                        class="absolute left-0 mt-2 hidden bg-white text-gray-800 shadow-lg rounded-lg w-40 py-2 z-50">

                        <a href="{{ route('publik.oleh-oleh') }}" class="block px-4 py-2 hover:bg-gray-100 transition">
                            Oleh-oleh
                        </a>

                        <a href="{{ route('publik.kuliner') }}" class="block px-4 py-2 hover:bg-gray-100 transition">
                            Kuliner
                        </a>
                    </div>
                </div>

                <a href="/tentang" class="hover:text-white transition">Tentang Kami</a>
                <a href="/kontak" class="hover:text-white transition">Kontak</a>

                <!-- Tombol Login -->

                @auth
                    <a href="{{ route('admin.dashboard') }}"
                        class="bg-white text-gray-800 font-semibold px-4 py-2 rounded-lg shadow hover:bg-gray-100 transition">
                        Dashboard
                    </a>
                @else
                    <a href="/login"
                        class="bg-white text-gray-800 font-semibold px-4 py-2 rounded-lg shadow hover:bg-gray-100 transition">
                        Login
                    </a>
                @endauth
            </div>

        </div>
    </nav>

    <!-- SPACER (agar konten tidak tertutup navbar) -->
    <div class="pt-20">
        @yield('content')
    </div>


    <!-- DROPDOWN SCRIPT -->
    <script>
        const dropdownBtn = document.getElementById('dropdownBtn');
        const dropdownMenu = document.getElementById('dropdownMenu');

        // Toggle dropdown ketika tombol diklik
        dropdownBtn.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        // Tutup dropdown jika klik di luar elemennya
        document.addEventListener('click', function(e) {
            if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>

</body>

</html>

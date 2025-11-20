<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .bg-header {
            background-color: #e3c986;
        }

        .bg-sidebar {
            background-color: #dae6a6;
        }

        .bg-sidebar-box {
            background-color: #ece8c7;
        }

        .bg-sidebar-active {
            background-color: #b98b58;
            color: white !important;
        }

        .bg-stat-card {
            background-color: #dff1a6;
        }

        .bg-action-btn {
            background-color: #b98b58;
        }

        .bg-logout-btn {
            background-color: #e58f34;
        }

        .rounded-xl-custom {
            border-radius: 1.7rem;
        }
    </style>
</head>

<body class="bg-[#f5e7e7]">

    <div class="min-h-screen flex flex-col">

        <!-- HEADER -->
        <div class="w-full bg-header h-20 flex items-center justify-between px-6 shadow-md">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" class="w-20 h-20 mr-3" alt="Logo">
                <h1 class="font-semibold text-gray-800 text-lg">Hallo Admin !</h1>
            </div>

            <!-- Search -->
            <div class="relative">
                <input type="text" class="border px-4 py-2 pl-10 w-64 rounded-full shadow">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">🔍</span>
            </div>
        </div>

        <div class="flex flex-1">

            <!-- SIDEBAR -->
            <aside class="w-60 bg-sidebar p-6 flex flex-col">

                <div class="bg-sidebar-box rounded-xl-custom p-5 shadow flex-grow">
                    <nav class="space-y-3 text-sm">

                        <a href="{{ route('admin.dashboard') }}"
                            class="flex items-center p-3 rounded-lg hover:bg-[#f3eabe]
                       {{ request()->is('dashboard') ? 'bg-sidebar-active' : '' }}">
                            <span class="mr-3">🏠</span> Dashboard
                        </a>

                        <a href="/kategori"
                            class="flex items-center p-3 rounded-lg hover:bg-[#f3eabe]
                       {{ request()->is('kategori') ? 'bg-sidebar-active' : '' }}">
                            <span class="mr-3">📁</span> Kategori
                        </a>

                        <a href="/menu"
                            class="flex items-center p-3 rounded-lg hover:bg-[#f3eabe]
                       {{ request()->is('menu') ? 'bg-sidebar-active' : '' }}">
                            <span class="mr-3">🍽️</span> Menu
                        </a>

                        <a href="/transaksi"
                            class="flex items-center p-3 rounded-lg hover:bg-[#f3eabe]
                       {{ request()->is('transaksi') ? 'bg-sidebar-active' : '' }}">
                            <span class="mr-3">💳</span> Transaksi
                        </a>

                    </nav>
                </div>

                <div class="mt-6">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="flex items-center justify-center p-3 text-white bg-logout-btn rounded-full"
                            type="submit">⬅️ Logout</button>
                    </form>
                    {{-- <a href="{{ route('logout') }}"
                        class="flex items-center justify-center p-3 text-white bg-logout-btn rounded-full">
                        ⬅️ Logout
                    </a> --}}
                </div>

            </aside>

            <!-- KONTEN HALAMAN -->
            <main class="flex-1 p-10">
                @yield('content')
            </main>

        </div>

    </div>

</body>

</html>

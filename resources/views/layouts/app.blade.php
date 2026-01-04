<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Dapur Mami Ersa</title>

    {{-- Tailwind CDN --}}
    
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FAFAFA; /* Ultra Light Gray/White */
        }

        /* Sidebar cerah senada */
        .sidebar-light {
            background-color: #FFFFFF;
            border-right: 1px solid #F1E9D2; /* Border warna emas sangat muda */
        }

        /* Menu Aktif: Emas Mewah */
        .nav-active {
            background-color: #E3C474 !important;
            color: #FFFFFF !important;
            box-shadow: 0 8px 20px -6px rgba(227, 196, 116, 0.5);
        }

        /* Hover effect */
        .nav-item:hover:not(.nav-active) {
            background-color: #FFF9EB;
            color: #B98B58;
        }

        .glass-header {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid #F1E9D2;
        }
    </style>
</head>

<body class="text-gray-700">

<div class="min-h-screen flex">

    <!-- SIDEBAR CERAH -->
    <aside class="w-64 sidebar-light flex flex-col fixed h-full z-50 transition-all duration-300">
        
        <!-- Logo Area -->
        <div class="p-8">
            <a href="/" class="flex items-center gap-3">
                <div class="p-2 bg-[#E3C474] rounded-xl shadow-lg shadow-[#E3C474]/20">
                    <i class="bi bi-shop-window text-white text-xl"></i>
                </div>
                <div>
                    <h1 class="font-black text-[#4A3728] text-lg tracking-tight leading-none">Mami Ersa</h1>
                    <span class="text-[10px] font-bold text-[#B98B58] uppercase tracking-[0.2em]">Management</span>
                </div>
            </a>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 px-4 space-y-1.5">
            <p class="text-[10px] px-4 text-gray-400 uppercase font-black tracking-[0.2em] mb-4 mt-4">Menu Utama</p>

            <a href="{{ route('admin.dashboard') }}"
               class="nav-item flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'nav-active' : 'text-gray-500' }}">
                <i class="bi bi-house-door-fill text-lg"></i>
                <span class="text-sm font-semibold">Dashboard</span>
            </a>

            <a href="{{ route('admin.menu.index') }}"
               class="nav-item flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all duration-200 {{ request()->routeIs('admin.menu.*') ? 'nav-active' : 'text-gray-500' }}">
                <i class="bi bi-egg-fried text-lg"></i>
                <span class="text-sm font-semibold">Daftar Menu</span>
            </a>

            <a href="{{ route('admin.image.index') }}"
               class="nav-item flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all duration-200 {{ request()->routeIs('admin.image.*') ? 'nav-active' : 'text-gray-500' }}">
                <i class="bi bi-images text-lg"></i>
                <span class="text-sm font-semibold">Media Galeri</span>
            </a>

            <a href="{{ route('admin.transaction.index') }}"
               class="nav-item flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all duration-200 {{ request()->routeIs('admin.transaction.*') ? 'nav-active' : 'text-gray-500' }}">
                <i class="bi bi-wallet2 text-lg"></i>
                <span class="text-sm font-semibold">Data Transaksi</span>
            </a>
        </nav>

        <!-- Akun & Logout (Bawah) -->
        <div class="p-4 mt-auto">
            <div class="bg-[#FFF9EB] rounded-2xl p-4 mb-4 border border-[#F1E9D2]">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-full bg-[#E3C474] text-white flex items-center justify-center font-bold shadow-sm">
                        {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-xs font-bold text-[#4A3728] truncate">{{ Auth::user()->name ?? 'Admin Mami' }}</p>
                        <p class="text-[10px] text-[#B98B58]">Administrator</p>
                    </div>
                </div>
                
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center justify-center gap-2 py-2.5 text-xs font-bold text-red-500 bg-white border border-red-100 rounded-xl hover:bg-red-500 hover:text-white transition-all duration-300 shadow-sm">
                        <i class="bi bi-power"></i> Keluar Sistem
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- AREA KONTEN -->
    <div class="flex-1 flex flex-col ml-64">

        <!-- HEADER STICKY -->
        <header class="glass-header sticky top-0 h-20 flex items-center justify-between px-10 z-40">
            <div class="flex items-center gap-2">
                <i class="bi bi-stars text-[#E3C474]"></i>
                <h2 class="text-gray-800 font-bold text-lg tracking-tight">
                    {{ request()->routeIs('admin.dashboard') ? 'Ringkasan Bisnis' : 'Panel Manajemen' }}
                </h2>
            </div>

            <div class="flex items-center gap-6">
                <!-- Search Box Modern -->
                <div class="relative hidden lg:block">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                        <i class="bi bi-search text-xs"></i>
                    </span>
                    <input type="text"
                        class="bg-gray-50 border border-gray-100 pl-10 pr-4 py-2 w-64 rounded-2xl text-xs focus:ring-2 focus:ring-[#E3C474] focus:bg-white transition-all outline-none"
                        placeholder="Cari menu atau transaksi...">
                </div>

                <!-- Notif & Web Icon -->
                <div class="flex items-center gap-3 border-l border-gray-100 pl-6">
                    <a href="/" target="_blank" class="w-10 h-10 rounded-xl flex items-center justify-center text-gray-400 hover:text-[#E3C474] hover:bg-[#FFF9EB] transition-all" title="Lihat Website">
                        <i class="bi bi-globe2 text-lg"></i>
                    </a>
                </div>
            </div>
        </header>

        <!-- MAIN KONTEN -->
        <main class="p-10">
            <!-- Breadcrumb Modern -->
            <div class="flex items-center gap-2 text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-8">
                <a href="#" class="hover:text-[#E3C474]">Mami Ersa</a>
                <i class="bi bi-chevron-right text-[8px]"></i>
                <span class="text-[#B98B58]">{{ Request::segment(2) ?? 'Dashboard' }}</span>
            </div>

            <div class="animate-content">
                @yield('content')
            </div>
        </main>

        <!-- FOOTER SIMPLE -->
        <footer class="mt-auto p-10 flex justify-between items-center text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] border-t border-gray-50">
            <p>&copy; 2026 Dapur Mami Ersa</p>
            <p>V 2.0.1 • Crafted with Quality</p>
        </footer>
    </div>

</div>

<style>
    /* Animasi muncul konten */
    @keyframes slideUp {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-content {
        animation: slideUp 0.5s ease-out forwards;
    }
</style>

</body>
</html>
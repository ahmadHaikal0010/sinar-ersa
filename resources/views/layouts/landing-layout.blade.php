<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dapur Mami Ersa - Cita Rasa Nusantara' }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Alpine JS (Untuk Interaksi Dropdown & Mobile Menu) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-brand { font-family: 'Playfair Display', serif; }
        
        /* Glassmorphism Effect */
        .glass-nav {
            background: rgba(227, 196, 116, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .nav-link-hover {
            position: relative;
        }
        .nav-link-hover::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }
        .nav-link-hover:hover::after {
            width: 100%;
        }
    </style>
</head>

<body class="bg-[#FFF7F0] text-gray-800 antialiased">

    <!-- NAVBAR -->
    <nav x-data="{ openMobile: false, openDropdown: false }" 
         class="w-full glass-nav text-gray-900 fixed top-0 left-0 shadow-sm z-50 border-b border-white/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">

                <!-- Logo Area -->
                <div class="flex-shrink-0 flex items-center gap-3 group cursor-pointer">
                    <div class="bg-white p-2 rounded-xl shadow-md group-hover:rotate-12 transition-transform duration-300">
                        <i class="bi bi-shop-window text-[#E3C474] text-xl"></i>
                    </div>
                    <a href="/" class="font-brand text-xl md:text-2xl font-black tracking-tight text-gray-900">
                        Dapur <span class="text-white">Mami Ersa</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link-hover font-bold text-sm uppercase tracking-wider transition">Beranda</a>

                    <!-- DROPDOWN MENU -->
                    <div class="relative">
                        <button @click="openDropdown = !openDropdown" @click.away="openDropdown = false"
                                class="nav-link-hover flex items-center gap-2 font-bold text-sm uppercase tracking-wider transition focus:outline-none">
                            Menu <i class="bi bi-chevron-down text-xs transition-transform" :class="openDropdown ? 'rotate-180' : ''"></i>
                        </button>

                        <!-- Dropdown List -->
                        <div x-show="openDropdown" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-2"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             class="absolute left-0 mt-4 bg-white text-gray-800 shadow-2xl rounded-2xl w-48 py-2 z-50 border border-gray-100">
                            
                            <a href="{{ route('publik.oleh-oleh') }}" class="flex items-center gap-3 px-5 py-3 hover:bg-[#FFF7F0] hover:text-[#E3C474] transition font-semibold text-sm">
                                <i class="bi bi-gift text-lg"></i> Oleh-oleh
                            </a>

                            <a href="{{ route('publik.kuliner') }}" class="flex items-center gap-3 px-5 py-3 hover:bg-[#FFF7F0] hover:text-[#E3C474] transition font-semibold text-sm">
                                <i class="bi bi-egg-fried text-lg"></i> Kuliner
                            </a>
                        </div>
                    </div>

                    <a href="/tentang" class="nav-link-hover font-bold text-sm uppercase tracking-wider transition">Tentang Kami</a>
                    <a href="/kontak" class="nav-link-hover font-bold text-sm uppercase tracking-wider transition">Kontak</a>

                    <!-- Tombol Login / Dashboard -->
                    @auth
                        <a href="{{ route('admin.dashboard') }}"
                            class="bg-gray-900 text-white font-bold px-6 py-2.5 rounded-full shadow-lg hover:bg-gray-800 hover:-translate-y-0.5 transition-all flex items-center gap-2 text-sm">
                            <i class="bi bi-grid-1x2"></i> Dashboard
                        </a>
                    @else
                        <a href="/login"
                            class="bg-white text-[#4A3728] font-bold px-6 py-2.5 rounded-full shadow-md hover:shadow-xl hover:-translate-y-0.5 transition-all flex items-center gap-2 text-sm border border-white">
                            <i class="bi bi-person-circle"></i> Login
                        </a>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button @click="openMobile = !openMobile" class="text-gray-900 text-3xl focus:outline-none">
                        <i class="bi" :class="openMobile ? 'bi-x-lg' : 'bi-list'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu List -->
        <div x-show="openMobile" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-5"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="md:hidden bg-white border-t border-gray-100 shadow-inner overflow-hidden">
            <div class="px-4 pt-4 pb-6 space-y-2">
                <a href="/" class="block px-4 py-3 rounded-xl text-base font-bold text-gray-700 hover:bg-[#E3C474] hover:text-white transition">Beranda</a>
                
                <div class="py-2 border-y border-gray-50 my-2">
                    <p class="px-4 text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Kategori Menu</p>
                    <a href="{{ route('publik.oleh-oleh') }}" class="flex items-center gap-3 px-4 py-3 text-gray-600 font-bold">
                        <i class="bi bi-gift text-[#E3C474]"></i> Oleh-oleh
                    </a>
                    <a href="{{ route('publik.kuliner') }}" class="flex items-center gap-3 px-4 py-3 text-gray-600 font-bold">
                        <i class="bi bi-egg-fried text-[#E3C474]"></i> Kuliner
                    </a>
                </div>

                <a href="/tentang" class="block px-4 py-3 rounded-xl text-base font-bold text-gray-700 hover:bg-[#E3C474] hover:text-white transition">Tentang Kami</a>
                <a href="/kontak" class="block px-4 py-3 rounded-xl text-base font-bold text-gray-700 hover:bg-[#E3C474] hover:text-white transition">Kontak</a>
                
                <div class="pt-4">
                    @auth
                        <a href="{{ route('admin.dashboard') }}" class="block w-full text-center bg-[#E3C474] text-white px-4 py-4 rounded-2xl font-bold shadow-lg shadow-[#E3C474]/30">DASHBOARD ADMIN</a>
                    @else
                        <a href="/login" class="block w-full text-center bg-[#4A3728] text-white px-4 py-4 rounded-2xl font-bold shadow-lg shadow-gray-900/20">MASUK KE AKUN</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="pt-24 min-h-screen">
        @yield('content')
    </main>

    <!-- FOOTER SIMPLE & MODERN -->
    <!-- FOOTER SECTION -->
<footer class="bg-white border-t border-[#E3C474]/20 pt-20 pb-10 mt-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <!-- Top Footer: Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            
            <!-- Column 1: Brand Identity -->
            <div class="space-y-6">
                <div class="flex items-center gap-3">
                    <div class="bg-[#E3C474] p-2 rounded-xl shadow-lg shadow-[#E3C474]/30">
                        <i class="bi bi-shop-window text-white text-xl"></i>
                    </div>
                    <span class="font-brand text-2xl font-black text-[#4A3728]">
                        Dapur <span class="text-[#E3C474]">Mami Ersa</span>
                    </span>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed font-medium">
                    Menghadirkan kelezatan masakan Nusantara dengan resep warisan keluarga. Kami berkomitmen memberikan cita rasa terbaik dan kualitas premium di setiap hidangan.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-[#E3C474] hover:text-white transition-all shadow-sm">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-[#25D366] hover:text-white transition-all shadow-sm">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-[#1877F2] hover:text-white transition-all shadow-sm">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h4 class="text-gray-900 font-bold text-sm uppercase tracking-widest mb-6 relative inline-block">
                    Tautan Cepat
                    <span class="absolute -bottom-2 left-0 w-8 h-1 bg-[#E3C474] rounded-full"></span>
                </h4>
                <ul class="space-y-4">
                    <li><a href="/" class="text-gray-500 hover:text-[#E3C474] text-sm font-semibold transition flex items-center gap-2"><i class="bi bi-chevron-right text-[10px]"></i> Beranda</a></li>
                    <li><a href="/tentang" class="text-gray-500 hover:text-[#E3C474] text-sm font-semibold transition flex items-center gap-2"><i class="bi bi-chevron-right text-[10px]"></i> Tentang Kami</a></li>
                    <li><a href="/kontak" class="text-gray-500 hover:text-[#E3C474] text-sm font-semibold transition flex items-center gap-2"><i class="bi bi-chevron-right text-[10px]"></i> Hubungi Kami</a></li>
                    <li><a href="/login" class="text-gray-500 hover:text-[#E3C474] text-sm font-semibold transition flex items-center gap-2"><i class="bi bi-chevron-right text-[10px]"></i> Login Admin</a></li>
                </ul>
            </div>

            <!-- Column 3: Category Menu -->
            <div>
                <h4 class="text-gray-900 font-bold text-sm uppercase tracking-widest mb-6 relative inline-block">
                    Menu Kami
                    <span class="absolute -bottom-2 left-0 w-8 h-1 bg-[#E3C474] rounded-full"></span>
                </h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('publik.oleh-oleh') }}" class="text-gray-500 hover:text-[#E3C474] text-sm font-semibold transition flex items-center gap-2"><i class="bi bi-gift text-xs"></i> Aneka Oleh-oleh</a></li>
                    <li><a href="{{ route('publik.kuliner') }}" class="text-gray-500 hover:text-[#E3C474] text-sm font-semibold transition flex items-center gap-2"><i class="bi bi-egg-fried text-xs"></i> Kuliner Nusantara</a></li>
                    <li><a href="#" class="text-gray-500 hover:text-[#E3C474] text-sm font-semibold transition flex items-center gap-2"><i class="bi bi-star text-xs"></i> Menu Favorit</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact Info -->
            <div>
                <h4 class="text-gray-900 font-bold text-sm uppercase tracking-widest mb-6 relative inline-block">
                    Hubungi Kami
                    <span class="absolute -bottom-2 left-0 w-8 h-1 bg-[#E3C474] rounded-full"></span>
                </h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i class="bi bi-geo-alt text-[#E3C474] text-lg"></i>
                        <span class="text-gray-500 text-sm font-medium leading-relaxed">Jl. Contoh Alamat No. 123, Jakarta Selatan, Indonesia</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="bi bi-telephone text-[#E3C474] text-lg"></i>
                        <span class="text-gray-500 text-sm font-medium">+62 812 3456 7890</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="bi bi-envelope text-[#E3C474] text-lg"></i>
                        <span class="text-gray-500 text-sm font-medium">info@dapurmamiersa.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Footer: Copyright -->
        <div class="pt-8 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-[11px] font-bold text-gray-400 uppercase tracking-[0.2em] text-center md:text-left">
                &copy; 2026 Dapur Mami Ersa. Seluruh hak cipta dilindungi.
            </p>
            <div class="flex items-center gap-6">
                <a href="#" class="text-[11px] font-bold text-gray-400 uppercase tracking-widest hover:text-[#E3C474] transition">Kebijakan Privasi</a>
                <a href="#" class="text-[11px] font-bold text-gray-400 uppercase tracking-widest hover:text-[#E3C474] transition">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

</body>

</html>
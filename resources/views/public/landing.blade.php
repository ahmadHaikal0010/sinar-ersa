@extends('layouts.landing-layout')

@section('content')
    <!-- Google Fonts & Icons (Pastikan sudah ada di layout utama, jika belum tambahkan ini) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FFF7F0;
        }

        .font-brand {
            font-family: 'Playfair Display', serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(2deg);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <!-- HERO SECTION -->
    <section class="relative min-h-[90vh] flex items-center overflow-hidden pt-16">
        <!-- Dekorasi Background -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#E3C474]/10 rounded-l-[100px] -z-10"></div>

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm border border-[#E3C474]/20">
                    <span class="flex h-2 w-2 rounded-full bg-[#E3C474] animate-ping"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#B98B58]">Cita Rasa Otentik
                        Nusantara</span>
                </div>

                <h1 class="font-brand text-6xl md:text-7xl lg:text-8xl font-black text-[#4A3728] leading-[0.9]">
                    Dapur <br>
                    <span class="italic text-[#E3C474]">Mami Ersa</span>
                </h1>

<<<<<<< HEAD
<!-- SECTION GABUNGAN: KEUNGGULAN & MENU -->
<section class="max-w-7xl mx-auto px-6 py-20 space-y-24">

    <!-- 1. SUB-SECTION: KEUNGGULAN (Static Cards) -->
    <div class="space-y-12">
        <div class="text-center">
            <h3 class="text-xs font-black text-[#B98B58] uppercase tracking-[0.3em] mb-3">Mengapa Memilih Kami</h3>
            <h2 class="text-3xl md:text-4xl font-black text-[#4A3728]">Keunggulan Dapur Mami Ersa</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card Keunggulan 1 -->
            <div class="bg-[#FFFBF5] p-8 rounded-[2.5rem] border border-[#E3C474]/20 text-center space-y-4">
                <div class="w-16 h-16 bg-[#4A3728] text-[#E3C474] rounded-2xl flex items-center justify-center text-3xl mx-auto shadow-lg">
                    <i class="bi bi-award-fill"></i>
                </div>
                <h4 class="text-lg font-black text-[#4A3728]">Bahan Premium</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Kami hanya menggunakan bumbu pilihan dan bahan segar setiap harinya untuk menjaga kualitas rasa.</p>
            </div>

            <!-- Card Keunggulan 2 -->
            <div class="bg-[#FFFBF5] p-8 rounded-[2.5rem] border border-[#E3C474]/20 text-center space-y-4">
                <div class="w-16 h-16 bg-[#E3C474] text-white rounded-2xl flex items-center justify-center text-3xl mx-auto shadow-lg">
                    <i class="bi bi-clock-history"></i>
                </div>
                <h4 class="text-lg font-black text-[#4A3728]">Resep Turun Temurun</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Citarasa autentik nusantara yang dijaga keasliannya dari resep rahasia keluarga Mami Ersa.</p>
            </div>

            <!-- Card Keunggulan 3 -->
            <div class="bg-[#FFFBF5] p-8 rounded-[2.5rem] border border-[#E3C474]/20 text-center space-y-4">
                <div class="w-16 h-16 bg-[#4A3728] text-[#E3C474] rounded-2xl flex items-center justify-center text-3xl mx-auto shadow-lg">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h4 class="text-lg font-black text-[#4A3728]">100% Halal & Higienis</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Proses memasak yang bersih dan terjamin kehalalannya untuk kenyamanan konsumsi keluarga Anda.</p>
            </div>
        </div>
    </div>

    <!-- 2. SEPARATOR (Garis Hiasan) -->
    <div class="flex items-center gap-4 justify-center">
        <div class="h-[1px] w-20 bg-gray-200"></div>
        <i class="bi bi-egg-fried text-[#E3C474] text-xl"></i>
        <div class="h-[1px] w-20 bg-gray-200"></div>
    </div>

    <!-- 3. SUB-SECTION: DAFTAR MENU (Dynamic Cards) -->
    <div class="space-y-12">
        <div class="text-center">
            <h3 class="text-xs font-black text-[#B98B58] uppercase tracking-[0.3em] mb-3">Menu Spesial</h3>
            <h2 class="text-3xl md:text-4xl font-black text-[#4A3728]">Pilih Menu Favorit Anda</h2>
=======
                <p class="text-gray-500 text-lg md:text-xl leading-relaxed max-w-md font-light">
                    Menyajikan kehangatan masakan rumah dalam setiap gigitan. Dari <span
                        class="font-semibold text-[#4A3728]">Oleh-oleh khas</span> hingga <span
                        class="font-semibold text-[#4A3728]">Sarapan Pagi</span> yang menggugah selera.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#menu"
                        class="px-10 py-5 bg-[#4A3728] text-white rounded-2xl font-bold text-lg shadow-xl shadow-gray-900/20 hover:bg-[#E3C474] transition-all duration-300 transform hover:-translate-y-1">
                        Eksplor Menu
                    </a>
                    <div class="flex items-center gap-4 px-6 py-4 bg-white rounded-2xl border border-gray-100">
                        <div class="flex -space-x-3">
                            <div class="w-10 h-10 rounded-full border-2 border-white bg-gray-200"></div>
                            <div
                                class="w-10 h-10 rounded-full border-2 border-white bg-[#E3C474] flex items-center justify-center text-[10px] text-white font-bold">
                                4.9</div>
                        </div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-tighter">Rating Pelanggan</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <!-- Background Shape -->
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-[#E3C474] to-transparent opacity-20 blur-3xl rounded-full">
                </div>
                <img src="{{ asset('images/bakwan.jpg') }}"
                    class="relative z-10 w-full max-w-[500px] mx-auto rounded-[3rem] shadow-2xl border-[12px] border-white animate-float object-cover h-[500px]">

                <!-- Floating Badge -->
                <div class="absolute top-10 -right-4 z-20 glass-card p-5 rounded-3xl shadow-xl hidden lg:block">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-[#E3C474] rounded-2xl flex items-center justify-center text-white text-xl">
                            <i class="bi bi-patch-check"></i>
                        </div>
                        <div>
                            <p class="font-bold text-[#4A3728]">100% Halal</p>
                            <p class="text-[10px] text-gray-500 uppercase font-bold">Bahan Pilihan</p>
                        </div>
                    </div>
                </div>
            </div>
>>>>>>> 9bdead04477d7a0d0b7ec64c26cfaee045e32c18
        </div>
    </section>

<<<<<<< HEAD
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($menus as $menu)
                <div class="group bg-white rounded-[2.5rem] shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 flex flex-col h-full">
                    
                    <!-- Image Area -->
                    <div class="relative overflow-hidden h-64">
                        @php $imgUrl = $menu->images->isNotEmpty() ? $menu->images->first()->url : asset('images/bakwan.jpg'); @endphp
                        <img src="{{ $imgUrl }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 right-4 px-4 py-2 bg-white/90 backdrop-blur-md rounded-2xl shadow-lg">
                            <span class="text-[#4A3728] font-black text-sm">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
                        </div>
                    </div>

                    <!-- Content Area -->
                    <div class="p-8 flex flex-col flex-grow text-center">
                        <h4 class="text-xl font-black text-[#4A3728] mb-2 group-hover:text-[#E3C474] transition-colors">
                            {{ $menu->nama }}
                        </h4>
                        <p class="text-gray-400 text-sm font-medium mb-6 line-clamp-2">
                            Menu spesial pilihan Mami Ersa yang dibuat fresh setiap harinya dengan bumbu autentik.
                        </p>

                        <!-- Actions -->
                        <div class="mt-auto space-y-3">
                            <a href="{{ route('publik.menu.show', $menu->id) }}"
                                class="block w-full py-3 border-2 border-gray-100 rounded-2xl text-xs font-black uppercase tracking-widest text-gray-400 hover:bg-gray-50 hover:text-[#4A3728] transition-all">
                                Lihat Detail Menu
                            </a>
                            
                            <a href="https://wa.me/6283181441459?text={{ urlencode('Halo Admin Dapur Mami Ersa 👋' . "\n\n" . 'Saya ingin memesan:' . "\n" . '🍽 Menu : ' . $menu->nama . "\n" . '💰 Harga : Rp ' . number_format($menu->harga, 0, ',', '.') . "\n\n" . 'Terima kasih 🙏') }}"
                                target="_blank" 
                                class="flex items-center justify-center gap-2 w-full py-4 bg-[#25D366] text-white rounded-2xl font-black text-xs uppercase tracking-[0.1em] shadow-lg shadow-green-200 hover:bg-green-600 transition-all transform hover:-translate-y-1">
                                <i class="bi bi-whatsapp text-lg"></i> Pesan via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>      
<!-- TENTANG SECTION -->
<section class="py-24 bg-[#4A3728] relative overflow-hidden rounded-t-[100px]">
    <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-20 items-center">
        <div class="relative">
            <div class="absolute -inset-4 border-2 border-[#E3C474]/30 rounded-[3rem]"></div>
            <img src="{{ asset('images/oleh-oleh.webp') }}" class="relative rounded-[3rem] shadow-2xl w-full h-[500px] object-cover">
            
            <div class="absolute -bottom-8 -right-8 bg-[#E3C474] p-10 rounded-[3rem] shadow-2xl hidden lg:block">
                <p class="text-5xl font-black text-white mb-1">20+</p>
                <p class="text-white/80 font-bold uppercase tracking-widest text-[10px]">Tahun Resep Warisan</p>
            </div>
        </div>

        <div class="text-white space-y-8">
            <h4 class="text-[#E3C474] font-bold uppercase tracking-[0.3em] text-xs">Since 2020</h4>
            <h2 class="font-brand text-6xl font-bold leading-tight">Membawa Rasa <br> <span class="italic text-[#E3C474]">Ke Rumah Anda</span></h2>
            
            <div class="space-y-6 text-white/70 leading-relaxed font-light">
                <p>
                    Dapur Mami Ersa bermula dari dapur kecil keluarga yang merindukan cita rasa asli masakan daerah yang kini mulai sulit ditemukan di perkotaan.
                </p>
                <p>
                    Kini kami hadir membawa lebih dari sekadar makanan, tapi sebuah memori rasa yang dibuat dengan kejujuran bahan dan ketulusan dalam mengolah.
                </p>
            </div>

            <div class="flex items-center gap-6 pt-6">
                <div class="flex items-center gap-4 group cursor-pointer">
                    <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center text-white text-2xl group-hover:bg-[#25D366] transition-all">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-[#E3C474] uppercase tracking-widest">Pesan Lewat</p>
                        <p class="font-bold">WhatsApp Admin</p>
=======
    <!-- KEUNGGULAN SECTION -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $features = [
                        [
                            'bi-award',
                            'Bahan Premium',
                            'Hanya menggunakan bahan organik dan segar dari supplier lokal terpercaya.',
                        ],
                        [
                            'bi-heart-pulse',
                            'Higienis & Sehat',
                            'Proses pembuatan yang bersih dan tanpa bahan pengawet kimia berbahaya.',
                        ],
                        [
                            'bi-stars',
                            'Kualitas Terjamin',
                            'Setiap pesanan dibuat fresh untuk menjaga cita rasa autentik Nusantara.',
                        ],
                    ];
                @endphp

                @foreach ($features as $item)
                    <div
                        class="group p-10 rounded-[2.5rem] bg-[#FFFBF5] border border-transparent hover:border-[#E3C474]/30 hover:bg-white hover:shadow-2xl transition-all duration-500">
                        <div
                            class="w-16 h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center text-3xl mb-8 group-hover:bg-[#E3C474] group-hover:text-white transition-all duration-500">
                            <i class="bi {{ $item[0] }}"></i>
                        </div>
                        <h3 class="font-brand text-2xl font-bold mb-4 text-[#4A3728]">{{ $item[1] }}</h3>
                        <p class="text-gray-500 leading-relaxed font-light text-sm">
                            {{ $item[2] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- MENU SECTION -->
    <section id="menu" class="py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-xl">
                    <h4 class="text-[#E3C474] font-bold uppercase tracking-[0.3em] text-xs mb-4">Our Signature</h4>
                    <h2 class="font-brand text-5xl font-bold text-[#4A3728]">Menu Unggulan <span
                            class="italic font-light">Hari Ini</span></h2>
                </div>
                <div class="flex gap-2">
                    <span
                        class="px-4 py-2 bg-[#4A3728] text-white rounded-full text-xs font-bold uppercase tracking-widest cursor-pointer">All
                        Menu</span>
                    <span
                        class="px-4 py-2 bg-white text-gray-400 rounded-full text-xs font-bold uppercase tracking-widest cursor-pointer hover:text-[#4A3728]">Oleh-Oleh</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                {{-- @php
                $menus = [
                    ['Bakwan Jagung','bakwan.jpg', 'Garing & Manis'],
                    ['Ikan Balado','oleh-oleh.webp', 'Pedas Nagih'],
                    ['Ketupat Sayur','ketupat.jpeg', 'Gurih Santan']
                ];
            @endphp --}}

                @foreach ($menus as $menu)
                    <div
                        class="group bg-white rounded-[2.5rem] p-4 shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-50">
                        <div class="relative h-72 overflow-hidden rounded-[2rem] mb-6">
                            @if ($menu->images->isNotEmpty())
                                <img src="{{ $menu->images->first()->url }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                                <img src="{{ asset('images/bakwan.jpg') }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @endif

                            <div
                                class="absolute top-4 right-4 glass-card px-4 py-2 rounded-full shadow-sm text-[10px] font-black uppercase tracking-wider text-[#B98B58]">
                                Best Seller
                            </div>
                        </div>

                        <div class="px-4 pb-4">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <p class="text-[#E3C474] text-[10px] font-bold uppercase tracking-widest">
                                        {{ $menu->kategori }}</p>
                                    <h3 class="text-2xl font-bold text-[#4A3728]">{{ $menu->nama }}</h3>
                                </div>
                                <div class="text-right">
                                    <p class="text-xl font-black text-[#D95F5F]">Rp {{ $menu->harga }}</p>
                                </div>
                            </div>

                            <div class="flex gap-3 pt-6 border-t border-gray-50 mt-4">
                                <a href="#"
                                    class="flex-1 text-center py-3.5 text-xs font-bold text-gray-400 hover:text-[#4A3728] transition-colors tracking-widest uppercase">Detail</a>
                                <a href="#"
                                    class="flex-[2] bg-[#E3C474] text-white text-center py-3.5 rounded-xl font-bold text-xs shadow-lg shadow-[#E3C474]/30 hover:bg-[#4A3728] transition-all tracking-widest uppercase">Pesan
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- TENTANG SECTION -->
    <section class="py-24 bg-[#4A3728] relative overflow-hidden rounded-t-[100px]">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
        </div>

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-20 items-center">
            <div class="relative">
                <div class="absolute -inset-4 border-2 border-[#E3C474]/30 rounded-[3rem]"></div>
                <img src="{{ asset('images/oleh-oleh.webp') }}"
                    class="relative rounded-[3rem] shadow-2xl w-full h-[500px] object-cover">

                <div class="absolute -bottom-8 -right-8 bg-[#E3C474] p-10 rounded-[3rem] shadow-2xl hidden lg:block">
                    <p class="text-5xl font-black text-white mb-1">20+</p>
                    <p class="text-white/80 font-bold uppercase tracking-widest text-[10px]">Tahun Resep Warisan</p>
                </div>
            </div>

            <div class="text-white space-y-8">
                <h4 class="text-[#E3C474] font-bold uppercase tracking-[0.3em] text-xs">Since 2020</h4>
                <h2 class="font-brand text-6xl font-bold leading-tight">Membawa Rasa <br> <span
                        class="italic text-[#E3C474]">Ke Rumah Anda</span></h2>

                <div class="space-y-6 text-white/70 leading-relaxed font-light">
                    <p>
                        Dapur Mami Ersa bermula dari dapur kecil keluarga yang merindukan cita rasa asli masakan daerah yang
                        kini mulai sulit ditemukan di perkotaan.
                    </p>
                    <p>
                        Kini kami hadir membawa lebih dari sekadar makanan, tapi sebuah memori rasa yang dibuat dengan
                        kejujuran bahan dan ketulusan dalam mengolah.
                    </p>
                </div>

                <div class="flex items-center gap-6 pt-6">
                    <div class="flex items-center gap-4 group cursor-pointer">
                        <div
                            class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center text-white text-2xl group-hover:bg-[#25D366] transition-all">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-[#E3C474] uppercase tracking-widest">Pesan Lewat</p>
                            <p class="font-bold">WhatsApp Admin</p>
                        </div>
>>>>>>> 9bdead04477d7a0d0b7ec64c26cfaee045e32c18
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Reveal Animation on Scroll
        window.addEventListener('scroll', reveal);

        function reveal() {
            var reveals = document.querySelectorAll('.reveal');
            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;
                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                }
            }
        }
    </script>
@endsection

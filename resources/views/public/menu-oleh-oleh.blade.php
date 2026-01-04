@extends('layouts.landing-layout')

@section('content')
    <!-- Google Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-brand { font-family: 'Playfair Display', serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .product-card:hover img {
            transform: scale(1.1);
        }
    </style>

    <!-- HERO SECTION -->
    <section class="relative overflow-hidden pt-12 pb-20">
        <!-- Dekorasi Latar Belakang -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#E3C474]/5 rounded-l-[100px] -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <!-- Text & Search -->
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm border border-[#E3C474]/20">
                    <span class="text-[#E3C474]"><i class="bi bi-stars"></i></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-gray-500">Premium Nusantara</span>
                </div>

                <h1 class="font-brand text-5xl md:text-6xl font-black text-[#4A3728] leading-tight">
                    Oleh-Oleh <br>
                    <span class="text-[#E3C474] italic">Khas Nusantara</span>
                </h1>
                
                <p class="text-gray-500 text-lg leading-relaxed max-w-md font-light">
                    Bawa pulang kehangatan cita rasa daerah dengan kualitas terbaik langsung dari <span class="font-semibold text-[#4A3728]">Dapur Mami Ersa</span>.
                </p>

                <!-- Modern Search Bar -->
                <div class="relative group max-w-lg">
                    <span class="absolute inset-y-0 left-0 pl-5 flex items-center text-[#E3C474]">
                        <i class="bi bi-search text-xl"></i>
                    </span>
                    <input type="text" placeholder="Cari Camilan atau Oleh-Oleh..."
                        class="w-full pl-14 pr-6 py-5 bg-white border-none rounded-3xl shadow-xl shadow-gray-200/50 focus:ring-2 focus:ring-[#E3C474] transition-all text-gray-700">
                </div>
            </div>

            <!-- Hero Image -->
            <div class="relative">
                <div class="absolute inset-0 bg-[#E3C474] rounded-full blur-[100px] opacity-10 animate-pulse"></div>
                <img src="{{ asset('images/oleh-oleh.webp') }}" 
                     class="relative z-10 w-full max-w-md mx-auto rounded-[3rem] shadow-2xl border-[12px] border-white transform rotate-2 hover:rotate-0 transition-all duration-500">
                
                <!-- Floating Badge -->
                <div class="absolute -bottom-6 -left-6 z-20 glass-card p-6 rounded-3xl shadow-xl hidden lg:block">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-[#E3C474] rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg">
                            <i class="bi bi-award"></i>
                        </div>
                        <div>
                            <p class="font-bold text-[#4A3728]">Terlaris</p>
                            <p class="text-[10px] text-gray-400 uppercase font-black">Minggu Ini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TITLE -->
    <div class="max-w-7xl mx-auto px-6 mb-12">
        <div class="flex items-center gap-4">
            <h2 class="font-brand text-3xl font-bold text-[#4A3728]">Koleksi Favorit</h2>
            <div class="h-[2px] flex-1 bg-gradient-to-r from-[#E3C474] to-transparent opacity-30"></div>
        </div>
    </div>

    <!-- PRODUCT GRID -->
    <section class="max-w-7xl mx-auto px-6 pb-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($menus as $menu)
                <div class="product-card group bg-white rounded-[2.5rem] p-5 shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-50 flex flex-col">
                    
                    <!-- Image Container -->
                    <div class="relative aspect-[4/3] overflow-hidden rounded-[2rem] mb-6 shadow-inner">
                        <div class="absolute inset-0 bg-black/5 z-10"></div>
                        @if ($menu->images->isNotEmpty())
                            <img src="{{ $menu->images->first()->url }}"
                                class="w-full h-full object-cover transition-transform duration-700">
                        @else
                            <img src="{{ asset('images/oleh-oleh.webp') }}"
                                class="w-full h-full object-cover transition-transform duration-700">
                        @endif
                        
                        <!-- Badge Harga di Atas Gambar -->
                        <div class="absolute bottom-4 left-4 z-20">
                            <span class="px-5 py-2 bg-white/90 backdrop-blur-md rounded-2xl text-[#4A3728] font-black text-sm shadow-lg">
                                Rp {{ number_format($menu->harga, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="px-2 flex-grow">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h4 class="font-bold text-xl text-[#4A3728] mb-1 group-hover:text-[#E3C474] transition-colors">
                                    {{ $menu->nama }}
                                </h4>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Oleh-Oleh Nusantara</p>
                            </div>
                            <span class="text-[#E3C474]"><i class="bi bi-heart-fill"></i></span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-6 flex gap-3">
                        <a href="{{ route('publik.menu.show', $menu->id) }}"
                            class="flex-1 px-4 py-4 rounded-2xl text-xs font-bold text-gray-400 border border-gray-100 hover:bg-gray-50 text-center transition tracking-widest uppercase">
                            Detail
                        </a>

                        <a href="https://wa.me/6283181441459?text={{ urlencode(
                            'Halo Admin Dapur Mami Ersa 👋' . "\n\n" . 'Saya ingin memesan:' . "\n" . '🍽 Menu : ' . $menu->nama . "\n" . '💰 Harga : Rp ' . number_format($menu->harga, 0, ',', '.') . "\n\n" . 'Terima kasih 🙏',
                        ) }}"
                            target="_blank" class="flex-[2] flex items-center justify-center gap-2 px-4 py-4 bg-[#25D366] text-white rounded-2xl font-bold text-xs shadow-lg shadow-green-200 hover:bg-[#1ea952] hover:-translate-y-1 transition-all tracking-widest uppercase">
                            <i class="bi bi-whatsapp text-lg"></i> Pesan
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- CALL TO ACTION (Optional) -->
    <section class="max-w-7xl mx-auto px-6 mb-24">
        <div class="bg-[#4A3728] rounded-[3rem] p-12 text-center relative overflow-hidden shadow-2xl">
            <div class="absolute top-0 right-0 w-64 h-64 bg-[#E3C474] rounded-full blur-[120px] opacity-20 -translate-y-1/2 translate-x-1/2"></div>
            <h3 class="font-brand text-4xl text-white mb-4 italic">Ingin Menu Lainnya?</h3>
            <p class="text-gray-400 mb-8 max-w-md mx-auto">Kami juga melayani pesanan katering dan sarapan pagi untuk acara spesial Anda.</p>
            <a href="/kontak" class="inline-block px-10 py-4 bg-[#E3C474] text-white rounded-2xl font-bold shadow-xl shadow-[#E3C474]/20 hover:scale-105 transition">Hubungi Kami</a>
        </div>
    </section>
@endsection
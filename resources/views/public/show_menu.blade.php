@extends('layouts.landing-layout')

@section('content')

<main class="py-12 md:py-20">
    <div class="max-w-6xl mx-auto px-6">
        
        <!-- MAIN CARD -->
        <div class="bg-white rounded-[3rem] shadow-xl shadow-gray-200/50 overflow-hidden border border-gray-50">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                
                <!-- KOLOM KIRI: GAMBAR -->
                <div class="relative h-[400px] lg:h-full overflow-hidden">
                    @php 
                        $imgUrl = $menu->images->isNotEmpty() ? $menu->images->first()->url : asset('images/bakwan.jpg'); 
                    @endphp
                    <img src="{{ $imgUrl }}" 
                         alt="{{ $menu->nama }}" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    
                    <!-- Overlay Badge -->
                    <div class="absolute top-8 left-8">
                        <span class="px-4 py-2 bg-white/90 backdrop-blur-md rounded-2xl shadow-lg text-[10px] font-black uppercase tracking-[0.2em] text-[#B98B58]">
                            {{ $menu->kategori }}
                        </span>
                    </div>
                </div>

                <!-- KOLOM KANAN: INFO -->
                <div class="p-8 md:p-16 flex flex-col justify-center">
                    <nav class="flex mb-4 text-gray-400 text-[10px] font-black uppercase tracking-[0.2em]">
                        <ol class="inline-flex items-center space-x-2">
                            <li>Menu</li>
                            <li><i class="bi bi-chevron-right text-[8px]"></i></li>
                            <li class="text-[#E3C474]">{{ $menu->kategori }}</li>
                        </ol>
                    </nav>

                    <h2 class="text-4xl md:text-5xl font-bold text-[#4A3728] mb-4 font-playfair">
                        {{ $menu->nama }}
                    </h2>

                    <div class="flex items-center gap-4 mb-8">
                        <div class="text-3xl font-black text-[#E3C474]">
                            Rp {{ number_format($menu->harga, 0, ',', '.') }}
                        </div>
                        <div class="h-6 w-[1px] bg-gray-200"></div>
                        <div class="text-gray-400 text-sm font-medium">
                            <i class="bi bi-clock-history mr-1"></i> Freshly Made
                        </div>
                    </div>

                    <!-- DESKRIPSI -->
                    <div class="space-y-4 mb-10 text-gray-500 leading-relaxed">
                        <p>Nikmati kelezatan <strong>{{ $menu->nama }}</strong> yang diolah dengan bumbu rahasia Dapur Mami Ersa. Menggunakan bahan-bahan pilihan yang segar untuk menjamin kualitas rasa di setiap gigitannya.</p>
                        <ul class="grid grid-cols-2 gap-3 text-xs font-bold uppercase tracking-wider text-[#4A3728]">
                            <li class="flex items-center gap-2"><i class="bi bi-check2-circle text-[#E3C474]"></i> 100% Halal</li>
                            <li class="flex items-center gap-2"><i class="bi bi-check2-circle text-[#E3C474]"></i> Tanpa Pengawet</li>
                            <li class="flex items-center gap-2"><i class="bi bi-check2-circle text-[#E3C474]"></i> Bahan Premium</li>
                            <li class="flex items-center gap-2"><i class="bi bi-check2-circle text-[#E3C474]"></i> Resep Autentik</li>
                        </ul>
                    </div>

                    <!-- ACTIONS -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="https://wa.me/6283181441459?text={{ urlencode(
                                'Halo Admin Dapur Mami Ersa 👋' . "\n\n" .
                                'Saya ingin memesan:' . "\n" .
                                '🍽 Menu : ' . $menu->nama . "\n" .
                                '💰 Harga : Rp ' . number_format($menu->harga, 0, ',', '.') . "\n\n" .
                                'Terima kasih 🙏'
                            ) }}"
                            target="_blank"
                            class="flex-1 flex items-center justify-center gap-3 px-8 py-5 bg-[#25D366] text-white rounded-[2rem] font-black text-xs uppercase tracking-widest shadow-xl shadow-green-100 hover:bg-green-600 transition-all transform hover:-translate-y-1"
                        >
                            <i class="bi bi-whatsapp text-xl"></i> Pesan via WhatsApp
                        </a>

                        <button onclick="window.history.back()" 
                                class="px-8 py-5 bg-gray-50 text-gray-400 rounded-[2rem] font-black text-xs uppercase tracking-widest hover:bg-gray-100 transition-all">
                            Kembali
                        </button>
                    </div>
                    
                    <p class="mt-8 text-[10px] text-gray-300 font-medium italic">
                        * Terdaftar sejak: {{ $menu->created_at->format('d F Y') }}
                    </p>
                </div>
            </div>
        </div>



@endsection
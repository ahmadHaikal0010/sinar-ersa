@extends('layouts.landing-layout')

@section('content')
<div class="bg-[#FAFAFA] min-h-screen" style="font-family: 'Plus Jakarta Sans', sans-serif;">
    
    <!-- HERO SECTION -->
    <section class="max-w-7xl mx-auto px-6 py-16 md:py-24 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Text -->
        <div class="space-y-6 order-2 md:order-1 text-center md:text-left">
            <div class="inline-block px-4 py-2 bg-[#E3C474]/10 rounded-full">
                <span class="text-[#B98B58] text-xs font-black uppercase tracking-[0.2em]">Citarasa Otentik</span>
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-[#4A3728] leading-tight">
                Kuliner Khas <br>
                <span class="text-[#E3C474]">Mami Ersa</span>
            </h2>
            <p class="text-gray-500 text-lg font-medium max-w-md mx-auto md:mx-0">
                Nikmati kelezatan berbagai macam menu sarapan dan hidangan rumahan dengan kualitas terbaik dan bumbu pilihan.
            </p>

            <!-- Search Modern -->
            <div class="relative max-w-md mx-auto md:mx-0 group">
                <span class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-[#E3C474] transition-colors">
                    <i class="bi bi-search text-xl"></i>
                </span>
                <input type="text" placeholder="Cari Menu Favorit Anda..."
                    class="w-full pl-14 pr-6 py-5 bg-white border-none rounded-[2rem] shadow-xl shadow-gray-200/50 focus:ring-4 focus:ring-[#E3C474]/20 transition-all font-medium text-[#4A3728]">
            </div>
        </div>

        <!-- Image with Decorative Elements -->
        <div class="relative order-1 md:order-2 flex justify-center">
            <div class="absolute inset-0 bg-[#E3C474] rounded-full filter blur-[80px] opacity-20 animate-pulse"></div>
            <div class="relative w-72 h-72 md:w-96 md:h-96">
                <img src="/images/bakwan.jpg" alt="sarapan" 
                     class="w-full h-full object-cover rounded-[3rem] shadow-2xl rotate-3 hover:rotate-0 transition-transform duration-500 border-8 border-white">
                <!-- Floating Badge -->
                <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-xl flex items-center gap-3 animate-bounce">
                    <div class="w-10 h-10 bg-[#E3C474] rounded-full flex items-center justify-center text-white">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-black text-gray-400 uppercase leading-none">Terpopuler</p>
                        <p class="text-sm font-bold text-[#4A3728]">Bakwan Jagung</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Header Separator -->
    <div class="w-full bg-[#4A3728] py-12 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10 flex justify-around items-center text-white text-6xl">
            <i class="bi bi-egg-fried"></i><i class="bi bi-cup-hot"></i><i class="bi bi-egg-fried"></i><i class="bi bi-cup-hot"></i>
        </div>
        <div class="relative z-10 text-center">
            <h3 class="text-2xl md:text-3xl font-black text-white tracking-wide uppercase">
                <span class="text-[#E3C474]">✦</span> Menu Kuliner Favorit <span class="text-[#E3C474]">✦</span>
            </h3>
        </div>
    </div>

    <!-- PRODUK GRID -->
    <section class="max-w-7xl mx-auto px-6 py-20">
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
                            Menu spesial pilihan Mami Ersa yang dibuat fresh setiap harinya.
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
    </section>

    <!-- Footer Decoration -->
    <div class="py-20 text-center opacity-20">
        <img src="/images/logo.png" class="w-20 mx-auto grayscale" alt="">
        <p class="text-[10px] font-black uppercase tracking-[0.5em] mt-4">Dapur Mami Ersa © 2024</p>
    </div>
</div>

<style>
    /* Tambahkan ke CSS global atau layout */
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
    
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;  
        overflow: hidden;
    }
</style>
@endsection
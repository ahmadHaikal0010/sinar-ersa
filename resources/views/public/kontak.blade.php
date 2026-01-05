@extends('layouts.landing-layout')

@section('content')
<div class="bg-[#FAFAFA] min-h-screen pb-20" style="font-family: 'Plus Jakarta Sans', sans-serif;">
    
    <!-- HEADER BAR DEKORATIF -->
    <div class="w-full h-3 bg-[#E3C474]"></div>

    <!-- HERO SECTION KONTAK -->
    <section class="max-w-5xl mx-auto px-6 pt-16 md:pt-24 text-center">
        <div class="inline-block px-4 py-2 bg-[#4A3728]/5 rounded-full mb-6 text-center">
            <span class="text-[#B98B58] text-[10px] font-black uppercase tracking-[0.3em]">Mari Terhubung</span>
        </div>
        
        <h1 class="text-5xl md:text-7xl font-black text-[#4A3728] mb-8 italic text-center" style="font-family: 'Playfair Display', serif;">
            Kontak <span class="text-[#E3C474]">Kami</span>
        </h1>

        <p class="max-w-2xl mx-auto text-gray-500 font-medium leading-relaxed mb-12 text-center">
            Punya pertanyaan mengenai menu atau pesanan khusus? Kami selalu siap membantu Anda menyajikan hidangan terbaik.
        </p>
    </section>

    <!-- CONTACT CARDS GRID -->
    <section class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- ALAMAT -->
            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border border-gray-100 hover:shadow-2xl hover:shadow-[#4A3728]/5 transition-all duration-500 text-center flex flex-col items-center">
                <div class="w-16 h-16 bg-[#4A3728] text-white rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:rotate-12 transition-transform shadow-xl shadow-gray-200">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
                <h3 class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] mb-3">Alamat Toko</h3>
                <p class="text-[#4A3728] font-bold leading-relaxed">
                    Jl. Nusantara No. 123,<br>
                    Jakarta Pusat, Indonesia
                </p>
            </div>

            <!-- TELEPON/WA -->
            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border border-gray-100 hover:shadow-2xl hover:shadow-[#E3C474]/10 transition-all duration-500 text-center flex flex-col items-center">
                <div class="w-16 h-16 bg-[#E3C474] text-white rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:rotate-12 transition-transform shadow-xl shadow-[#E3C474]/20">
                    <i class="bi bi-whatsapp"></i>
                </div>
                <h3 class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] mb-3">WhatsApp</h3>
                <p class="text-[#4A3728] font-bold text-xl mb-4">+62 812 3456 7890</p>
                <a href="https://wa.me/6281234567890" target="_blank"
                   class="px-6 py-2 bg-[#25D366] text-white rounded-full text-[10px] font-black uppercase tracking-widest hover:bg-green-600 transition-colors">
                    Chat Sekarang
                </a>
            </div>

            <!-- JAM OPERASIONAL -->
            <div class="group bg-white p-10 rounded-[2.5rem] shadow-sm border border-gray-100 hover:shadow-2xl hover:shadow-[#4A3728]/5 transition-all duration-500 text-center flex flex-col items-center">
                <div class="w-16 h-16 bg-[#B98B58] text-white rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:rotate-12 transition-transform shadow-xl shadow-gray-200">
                    <i class="bi bi-clock-fill"></i>
                </div>
                <h3 class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] mb-3">Jam Operasional</h3>
                <div class="text-[#4A3728] font-bold space-y-1">
                    <p class="text-sm">Senin - Sabtu: <span class="text-[#B98B58]">08.00 - 20.00</span></p>
                    <p class="text-sm">Minggu: <span class="text-[#B98B58]">09.00 - 17.00</span></p>
                </div>
            </div>

        </div>

        <!-- CTA SECTION (MAP PLACEHOLDER) -->
        <div class="mt-16 bg-[#4A3728] rounded-[3rem] p-12 overflow-hidden relative group">
            <div class="absolute inset-0 bg-[#E3C474]/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="text-center md:text-left">
                    <h2 class="text-3xl font-black text-white mb-2 italic" style="font-family: 'Playfair Display', serif;">Tunggu Apa Lagi?</h2>
                    <p class="text-white/60 font-medium">Cicipi kelezatan masakan rumahan Mami Ersa sekarang juga.</p>
                </div>
                <a href="{{ "/"}}" 
                   class="px-10 py-5 bg-[#E3C474] text-[#4A3728] rounded-2xl font-black text-xs uppercase tracking-[0.2em] shadow-xl hover:bg-white transition-all transform hover:-translate-y-1">
                    Lihat Semua Menu
                </a>
            </div>
            
            <!-- Elemen Dekorasi di Background -->
            <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-white/5 rounded-full"></div>
        </div>

    </section>

    <!-- Footer Space -->
    <div class="py-10"></div>
</div>

<!-- Import Font untuk Judul -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
@endsection
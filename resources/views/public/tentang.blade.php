@extends('layouts.landing-layout')

@section('content')
<div class="bg-[#FAFAFA] min-h-screen pb-20" style="font-family: 'Plus Jakarta Sans', sans-serif;">
    
    <!-- HEADER BAR DEKORATIF -->
    <div class="w-full h-3 bg-[#E3C474]"></div>

    <!-- HERO SECTION TENTANG KAMI -->
    <section class="max-w-5xl mx-auto px-6 pt-16 md:pt-24 text-center">
        <div class="inline-block px-4 py-2 bg-[#4A3728]/5 rounded-full mb-6">
            <span class="text-[#B98B58] text-xs font-black uppercase tracking-[0.3em]">Mengenal Lebih Dekat</span>
        </div>
        
        <!-- Judul dengan Font Elegan -->
        <h1 class="text-5xl md:text-7xl font-black text-[#4A3728] mb-8 italic" style="font-family: 'Playfair Display', serif;">
            Tentang <span class="text-[#E3C474]">Kami</span>
        </h1>

        <div class="w-24 h-1 bg-[#E3C474] mx-auto rounded-full mb-12"></div>
    </section>

    <!-- CONTENT CARD -->
    <section class="max-w-5xl mx-auto px-6">
        <div class="bg-white rounded-[3rem] shadow-xl shadow-gray-200/50 p-8 md:p-16 relative overflow-hidden">
            <!-- Dekorasi Background -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-[#E3C474]/5 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-[#4A3728]/5 rounded-full -ml-20 -mb-20"></div>

            <div class="relative z-10 space-y-8 text-center md:text-left">
                <p class="text-xl md:text-2xl leading-relaxed text-[#4A3728] font-medium">
                    <span class="font-black text-3xl text-[#E3C474]">D</span>apur Mami Ersa hadir sebagai perwujudan kasih sayang melalui masakan. Kami adalah toko online yang mendedikasikan diri untuk menyajikan **makanan khas nusantara berkualitas tinggi**.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-8">
                    <div class="space-y-4">
                        <div class="w-12 h-12 bg-[#4A3728] text-white rounded-2xl flex items-center justify-center text-2xl shadow-lg shadow-gray-200">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <h3 class="text-xl font-black text-[#4A3728]">Cita Rasa Autentik</h3>
                        <p class="text-gray-500 leading-relaxed">
                            Menghadirkan keajaiban rasa tradisional yang autentik, diolah dengan bahan-bahan pilihan dan resep rahasia yang dijaga turun-temurun.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="w-12 h-12 bg-[#E3C474] text-white rounded-2xl flex items-center justify-center text-2xl shadow-lg shadow-[#E3C474]/20">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h3 class="text-xl font-black text-[#4A3728]">Dua Kategori Utama</h3>
                        <p class="text-gray-500 leading-relaxed">
                            Kami fokus pada dua spesialisasi terbaik: **Oleh-Oleh khas** yang tahan lama dan **Sarapan Pagi** yang hangat serta menggugah selera.
                        </p>
                    </div>
                </div>

                <div class="pt-12 border-t border-gray-100 flex flex-col md:flex-row items-center justify-between gap-6">
                    <p class="text-[#B98B58] font-bold italic text-lg">
                        "Cepat, ramah, dan selalu nikmat."
                    </p>
                    <a href="https://wa.me/6283181441459" target="_blank"
                       class="inline-flex items-center gap-3 px-8 py-4 bg-[#25D366] text-white rounded-2xl font-black text-xs uppercase tracking-widest shadow-xl shadow-green-100 hover:bg-green-600 transition-all transform hover:-translate-y-1">
                        <i class="bi bi-whatsapp text-lg"></i> Hubungi Kami Sekarang
                    </a>
                </div>
            </div>
        </div>

        <!-- STATS / VALUES -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-12">
            <div class="bg-[#4A3728] p-6 rounded-[2rem] text-center">
                <p class="text-[#E3C474] text-3xl font-black mb-1">100%</p>
                <p class="text-white/60 text-[10px] font-black uppercase tracking-widest">Halal & Higienis</p>
            </div>
            <div class="bg-white p-6 rounded-[2rem] text-center shadow-sm border border-gray-100">
                <p class="text-[#4A3728] text-3xl font-black mb-1">Premium</p>
                <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest">Bahan Pilihan</p>
            </div>
            <div class="bg-[#E3C474] p-6 rounded-[2rem] text-center">
                <p class="text-[#4A3728] text-3xl font-black mb-1">Fresh</p>
                <p class="text-[#4A3728]/60 text-[10px] font-black uppercase tracking-widest">Dibuat Setiap Hari</p>
            </div>
            <div class="bg-white p-6 rounded-[2rem] text-center shadow-sm border border-gray-100">
                <p class="text-[#4A3728] text-3xl font-black mb-1">Ramah</p>
                <p class="text-gray-400 text-[10px] font-black uppercase tracking-widest">Pelayanan Cepat</p>
            </div>
        </div>
    </section>
</div>

<!-- Tambahkan Font Playfair Display untuk kesan mewah di bagian judul -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
@endsection
@extends('layouts.landing-layout')

@section('content')
    <!-- Google Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #FFF7F0; overflow-x: hidden; }
        .font-brand { font-family: 'Playfair Display', serif; }
        .reveal { opacity: 0; transform: translateY(30px); transition: all 0.8s ease-out; }
        .reveal.active { opacity: 1; transform: translateY(0); }
    </style>

    <!-- 1. HERO SECTION -->
    <section class="relative min-h-[80vh] flex items-center overflow-hidden pt-20">
        <!-- Dekorasi Background -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-[#E3C474]/10 rounded-l-[100px] -z-10"></div>

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center w-full">
            <div class="space-y-8 reveal active">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm border border-[#E3C474]/20">
                    <span class="flex h-2 w-2 rounded-full bg-[#E3C474] animate-ping"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-[#B98B58]">Cita Rasa Otentik Nusantara</span>
                </div>

                <h1 class="font-brand text-6xl md:text-7xl lg:text-8xl font-black text-[#4A3728] leading-[0.9]">
                    Dapur <br>
                    <span class="italic text-[#E3C474]">Mami Ersa</span>
                </h1>
                <p class="text-gray-600 max-w-md leading-relaxed">
                    Menyajikan kehangatan masakan rumah dengan bumbu rahasia keluarga yang diwariskan turun-temurun.
                </p>
                <div class="flex gap-4">
                    <a href="#menu" class="px-8 py-4 bg-[#4A3728] text-white rounded-2xl font-bold hover:bg-[#5d4633] transition-all shadow-lg">Lihat Menu</a>
                    <a href="#tentang" class="px-8 py-4 border-2 border-[#E3C474] text-[#4A3728] rounded-2xl font-bold hover:bg-[#E3C474] hover:text-white transition-all">Tentang Kami</a>
                </div>
            </div>
            
            <!-- Hero Image Placeholder (Opsional) -->
            <div class="relative hidden md:block reveal active">
               <img src="{{ 'https://th.bing.com/th/id/OIP.P3DZFdihaxwnfYQJSPqcvQHaEd?w=600' }}" ... >
        </div>
    </section>

    <!-- 2. KEUNGGULAN SECTION -->
    <section class="py-24 bg-white/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <h3 class="text-xs font-black text-[#B98B58] uppercase tracking-[0.3em] mb-3">Mengapa Memilih Kami</h3>
                <h2 class="text-3xl md:text-4xl font-black text-[#4A3728]">Keunggulan Dapur Mami Ersa</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-[#FFFBF5] p-8 rounded-[2.5rem] border border-[#E3C474]/20 text-center space-y-4 reveal">
                    <div class="w-16 h-16 bg-[#4A3728] text-[#E3C474] rounded-2xl flex items-center justify-center text-3xl mx-auto shadow-lg">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <h4 class="text-lg font-black text-[#4A3728]">Bahan Premium</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Kami menggunakan bumbu pilihan dan bahan segar setiap hari.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-[#FFFBF5] p-8 rounded-[2.5rem] border border-[#E3C474]/20 text-center space-y-4 reveal" style="transition-delay: 100ms;">
                    <div class="w-16 h-16 bg-[#E3C474] text-white rounded-2xl flex items-center justify-center text-3xl mx-auto shadow-lg">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h4 class="text-lg font-black text-[#4A3728]">Resep Warisan</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Citarasa autentik yang dijaga keasliannya dari resep keluarga.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-[#FFFBF5] p-8 rounded-[2.5rem] border border-[#E3C474]/20 text-center space-y-4 reveal" style="transition-delay: 200ms;">
                    <div class="w-16 h-16 bg-[#4A3728] text-[#E3C474] rounded-2xl flex items-center justify-center text-3xl mx-auto shadow-lg">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="text-lg font-black text-[#4A3728]">100% Halal</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Proses memasak yang bersih dan terjamin kehalalannya.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. MENU SECTION -->
    <section id="menu" class="py-24 max-w-7xl mx-auto px-6">
        <div class="flex items-center gap-4 justify-center mb-12 reveal">
            <div class="h-[1px] w-20 bg-gray-200"></div>
            <i class="bi bi-egg-fried text-[#E3C474] text-xl"></i>
            <div class="h-[1px] w-20 bg-gray-200"></div>
        </div>

        <div class="text-center mb-16 reveal">
            <h3 class="text-xs font-black text-[#B98B58] uppercase tracking-[0.3em] mb-3">Menu Spesial</h3>
            <h2 class="text-3xl md:text-4xl font-black text-[#4A3728]">Pilih Menu Favorit Anda</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($menus as $menu)
                <div class="group bg-white rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100 flex flex-col reveal">
                    <!-- Image Area -->
                    <div class="relative overflow-hidden h-52">
                        @php $imgUrl = $menu->images->isNotEmpty() ? $menu->images->first()->url : asset('images/bakwan.jpg'); @endphp
                        <img src="{{ $imgUrl }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-3 right-3 px-3 py-1.5 bg-white/90 backdrop-blur-md rounded-xl shadow-md">
                            <span class="text-[#4A3728] font-black text-xs">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
                        </div>
                    </div>

                    <!-- Content Area -->
                    <div class="p-6 flex flex-col flex-grow">
                        <h4 class="text-lg font-black text-[#4A3728] mb-1 group-hover:text-[#E3C474] transition-colors line-clamp-1">
                            {{ $menu->nama }}
                        </h4>
                        <p class="text-gray-400 text-xs font-medium mb-4 line-clamp-2">
                            Menu spesial pilihan Mami Ersa yang dibuat fresh setiap harinya dengan bumbu autentik.
                        </p>

                        <div class="mt-auto space-y-2">
                            <a href="{{ route('publik.menu.show', $menu->id) }}"
                                class="block w-full py-2.5 border-2 border-gray-100 rounded-xl text-[10px] font-black uppercase tracking-widest text-gray-400 hover:bg-gray-50 hover:text-[#4A3728] text-center transition-all">
                                Lihat Detail
                            </a>
                            <a href="https://wa.me/6283181441459?text={{ urlencode('Halo Admin Dapur Mami Ersa 👋' . "\n\n" . 'Saya ingin memesan:' . "\n" . '🍽 Menu : ' . $menu->nama) }}"
                                target="_blank"
                                class="flex items-center justify-center gap-2 w-full py-3 bg-[#25D366] text-white rounded-xl font-black text-[10px] uppercase tracking-[0.1em] shadow-lg hover:bg-green-600 transition-all transform hover:-translate-y-1">
                                <i class="bi bi-whatsapp text-base"></i> Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- 4. TENTANG SECTION -->
    <section id="tentang" class="py-24 bg-[#4A3728] relative overflow-hidden rounded-t-[60px] md:rounded-t-[100px]">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-20 items-center">
            <div class="relative reveal">
                <div class="absolute -inset-4 border-2 border-[#E3C474]/30 rounded-[3rem]"></div>
                <img src="{{ asset('images/oleh-oleh.webp') }}" class="relative rounded-[3rem] shadow-2xl w-full h-[400px] md:h-[500px] object-cover">
                <div class="absolute -bottom-8 -right-8 bg-[#E3C474] p-8 rounded-[2.5rem] shadow-2xl hidden lg:block text-center">
                    <p class="text-4xl font-black text-white mb-1">20+</p>
                    <p class="text-white/80 font-bold uppercase tracking-widest text-[9px]">Tahun Resep Warisan</p>
                </div>
            </div>

            <div class="text-white space-y-8 reveal">
                <h4 class="text-[#E3C474] font-bold uppercase tracking-[0.3em] text-xs">Since 2020</h4>
                <h2 class="font-brand text-5xl md:text-6xl font-bold leading-tight">Membawa Rasa <br> <span class="italic text-[#E3C474]">Ke Rumah Anda</span></h2>

                <div class="space-y-6 text-white/70 leading-relaxed font-light">
                    <p>Dapur Mami Ersa bermula dari dapur kecil keluarga yang merindukan cita rasa asli masakan daerah yang kini mulai sulit ditemukan di perkotaan.</p>
                    <p>Kini kami hadir membawa lebih dari sekadar makanan, tapi sebuah memori rasa yang dibuat dengan kejujuran bahan dan ketulusan dalam mengolah.</p>
                </div>

                <div class="pt-6">
                    <a href="https://wa.me/6283181441459" class="flex items-center gap-4 group w-fit">
                        <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center text-white text-2xl group-hover:bg-[#25D366] transition-all">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-[#E3C474] uppercase tracking-widest">Pesan Lewat</p>
                            <p class="font-bold">WhatsApp Admin</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        function reveal() {
            var reveals = document.querySelectorAll('.reveal');
            for (var i = 0; i < reveals.length; i++) {
                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 100;
                if (revealtop < windowheight - revealpoint) {
                    reveals[i].classList.add('active');
                }
            }
        }
        window.addEventListener('scroll', reveal);
        window.addEventListener('load', reveal);
    </script>
@endsection
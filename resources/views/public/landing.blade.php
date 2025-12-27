@extends('layouts.landing-layout')
@section('content')
    <style>
        /* 1. IMPORT FONT DARI GOOGLE FONTS (Diasumsikan ini yang paling mirip) */
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap');

        /* 2. DEFINISI KELAS FONT TULISAN TANGAN */
        .handwritten-font {
            font-family: 'Dancing Script', cursive;
            font-weight: 700;
            /* Dibuat sedikit tebal untuk judul */
            line-height: 1.2;
        }

        /* Warna Kustom (Untuk Judul Tentang Kami) */
        .text-custom-brown {
            color: #C28020;
        }
    </style>

    <section class="bg-[#FFF8E7] py-20">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <div class="space-y-4">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight text-gray-900">
                    Dapur
                </h1>
                <h1 class="text-4xl md:text-5xl font-bold leading-tight text-gray-900">
                    <span class="text-[#D95F5F] font-extrabold">Mami Ersa</span>
                </h1>

                <p class="text-gray-700 text-lg leading-relaxed max-w-md">
                    Nikmati kelezatan makanan khas daerah untuk oleh-oleh dan sarapan pagi.
                </p>

                <a href="#menu"
                    class="inline-block bg-[#D9A84E] text-white px-8 py-3 rounded-lg font-semibold
                      hover:bg-[#c2903e] transition shadow">
                    Belanja Sekarang
                </a>
            </div>

            <div class="flex justify-center">
                <img src="{{ asset('images/oleh-oleh.webp') }}" class="rounded-2xl w-96 shadow-xl object-cover">
            </div>

        </div>
    </section>

    <section class="py-14 bg-[#F4E8CF]">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">

            <div class="bg-white p-8 border rounded-xl shadow-sm text-center">
                <div class="text-4xl mb-3">🥘</div>
                <h3 class="font-bold text-gray-900 mb-2">Bahan Premium</h3>
                <p class="text-gray-600 text-sm">Dibuat dengan bahan-bahan yang berkualitas tinggi</p>
            </div>

            <div class="bg-white p-8 border rounded-xl shadow-sm text-center">
                <div class="text-4xl mb-3">❤️</div>
                <h3 class="font-bold text-gray-900 mb-2">Dibuat Dengan Cinta</h3>
                <p class="text-gray-600 text-sm">Dibuat dengan Penyajian dan dedikasi penuh</p>
            </div>

            <div class="bg-white p-8 border rounded-xl shadow-sm text-center">
                <div class="text-4xl mb-3">⭐</div>
                <h3 class="font-bold text-gray-900 mb-2">Kualitas Terjamin</h3>
                <p class="text-gray-600 text-sm">Kepuasan pelanggan adalah Prioritas kami</p>
            </div>

        </div>
    </section>

    <section id="menu" class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center">

            <h2 class="handwritten-font text-5xl md:text-5xl text-gray-900 mb-12">Menu Unggulan</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                @foreach ($menus as $menu)
                    <div class="bg-white rounded-2xl border shadow hover:shadow-xl transition p-6">
                        @if ($menu->images->isNotEmpty())
                            <div class="w-full h-48 rounded-xl overflow-hidden mb-4">
                                <img src="{{ $menu->images->first()->url }}" class="w-full h-full object-cover">
                            </div>
                        @else
                            <div class="w-full h-48 rounded-xl overflow-hidden mb-4">
                                <img src="{{ asset('images/oleh-oleh.webp') }}" class="w-full h-full object-cover">
                            </div>
                        @endif

                        <h3 class="font-semibold text-xl text-gray-900">{{ $menu->nama }}</h3>
                        <p class="text-gray-600 mb-3">Rp {{ $menu->harga }}</p>

                        <div class="flex justify-center gap-4 mt-3">
                            <button
                                class="px-4 py-2 border border-gray-400 text-gray-700 rounded-lg hover:bg-gray-100 transition">
                                Lihat Detail
                            </button>

                            <button class="px-4 py-2 bg-[#D9A84E] text-white rounded-lg hover:bg-[#c2903e] transition">
                                Beli
                            </button>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <section class="py-20 bg-[#F4E8CF]">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <div class="rounded-2xl overflow-hidden shadow-xl">
                <img src="{{ asset('images/logo.png') }}"class="object-cover w-full">
            </div>

            <div>
                <h2 class="handwritten-font text-5xl text-custom-brown mb-4">Tentang Kami</h2>

                <p class="text-gray-700 leading-relaxed text-sm">
                    Dapur Mami Ersa adalah toko online yang menyediakan berbagai macam makanan khas nusantara berkualitas
                    tinggi. Kami menghadirkan cita rasa tradisional yang autentik dengan bahan-bahan pilihan dan resep
                    turun-temurun.
                </p>
                <p class="text-gray-700 leading-relaxed text-sm mt-2">
                    Dengan dua kategori utama - Oleh-Oleh dan Sarapan Pagi - kami berkomitmen untuk menghadirkan produk
                    terbaik yang cocok untuk berbagai kebutuhan Anda. Pesan mudah lewat WhatsApp, kami siap melayani Anda
                    dengan cepat dan ramah!
                </p>
            </div>

        </div>
    </section>

    <footer class="bg-[#F4E8CF] py-10 border-t">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">

            <div>
                <h3 class="font-bold text-lg">Tentang Dapur Mami Sinar Ersa</h3>
                <p class="text-gray-700 text-sm mt-1">
                    Menyediakan makanan khas Nusantara dengan kualitas terbaik dan rasa autentik.
                </p>
            </div>

            <div>
                <h3 class="font-bold text-lg">Kontak Kami</h3>
                <p class="text-gray-700 text-sm mt-1">📍 Jl. Nusantara No. 123, Jakarta</p>
                <p class="text-gray-700 text-sm">📞 +62 812 345</p>
                <p class="text-gray-700 text-sm">📧 info@rasanusantara.com</p>
            </div>

            <div>
                <h3 class="font-bold text-lg">Ikuti Kami</h3>
                <div class="flex gap-4 text-2xl mt-2">
                    <span>📘</span>
                    <span>📸</span>
                    <span>▶️</span>
                </div>
            </div>

        </div>
    </footer>
@endsection

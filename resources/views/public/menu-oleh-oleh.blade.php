@extends('layouts.landing-layout')

@section('content')
    <!-- HERO -->
    <section class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <!-- Text -->
        <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Menu Oleh Oleh Khas Nusantara</h2>
            <p class="text-gray-600 mb-4">
                Nikmati kelezatan makanan khas daerah dengan kualitas terbaik dari dapur mami ersa.
            </p>

            <!-- Search -->
            <div class="w-full">
                <input type="text" placeholder="Cari Oleh-Oleh Favorit Anda"
                    class="w-full p-3 border rounded-full shadow-sm focus:ring-2 focus:ring-yellow-600">
            </div>
        </div>

        <!-- Image -->
        <div class="flex justify-center">
            <!-- TANPA asset() -->
            <img src="{{ asset('images/oleh-oleh.webp') }}" alt="oleh oleh" class="w-72 rounded-xl shadow">
        </div>

    </section>

    <!-- Header Section -->
    <div class="w-full bg-[#E3C474] py-6 mt-4">
        <h3 class="text-center text-xl font-bold text-gray-800">Oleh Oleh Favorit</h3>
    </div>

    <!-- Produk -->
    <section class="max-w-6xl mx-auto px-6 py-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        @foreach ($menus as $menu)
            <div class="bg-white rounded-xl shadow p-4 text-center">
                @if ($menu->images->isNotEmpty())
                    <img src="{{ $menu->images->first()->url }}"
                        class="w-40 h-32 object-cover mx-auto mb-3 rounded-lg shadow">
                @else
                    <img src="{{ asset('images/oleh-oleh.webp') }}"
                        class="w-40 h-32 object-cover mx-auto mb-3 rounded-lg shadow">
                @endif

                <h4 class="font-bold text-gray-800">{{ $menu->nama }}</h4>
                <p class="text-gray-600 mb-3">
                    Rp {{ number_format($menu->harga, 0, ',', '.') }}
                </p>

                <div class="flex justify-center space-x-3">
                    <a href="{{ route('publik.menu.show', $menu->id) }}"
                        class="px-4 py-1 border rounded-lg text-gray-700 hover:bg-gray-100 transition">
                        Lihat Detail
                    </a>

                    <a href="https://wa.me/6283181441459?text={{ urlencode(
                        'Halo Admin Dapur Mami Ersa 👋' .
                            "\n\n" .
                            'Saya ingin memesan:' .
                            "\n" .
                            '🍽 Menu : ' .
                            $menu->nama .
                            "\n" .
                            '💰 Harga : Rp ' .
                            number_format($menu->harga, 0, ',', '.') .
                            "\n\n" .
                            'Terima kasih 🙏',
                    ) }}"
                        target="_blank" class="px-4 py-2 bg-[#25D366] text-white rounded-lg hover:bg-green-600 transition">
                        💬 Pesan via WhatsApp
                    </a>
                </div>

            </div>
        @endforeach

    </section>
@endsection

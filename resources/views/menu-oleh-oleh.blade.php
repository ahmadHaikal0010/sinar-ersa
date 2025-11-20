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
        <img src="/build/assets/img/tempe.jpg" alt="oleh oleh" class="w-72 rounded-xl shadow">
    </div>

</section>

<!-- Header Section -->
<div class="w-full bg-[#E3C474] py-6 mt-4">
    <h3 class="text-center text-xl font-bold text-gray-800">Oleh Oleh Favorit</h3>
</div>

<!-- Produk -->
<section class="max-w-6xl mx-auto px-6 py-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

    @php
        $products = [
            ['img' => 'build/assets/img/tempe.jpg', 'name' => 'Bakwan', 'price' => 25000],
            ['img' => 'build/assets/img/pisang.jpeg', 'name' => 'Keripik', 'price' => 25000],
            ['img' => 'build/assets/img/balado.jpg', 'name' => 'Sanjai', 'price' => 25000],
            ['img' => 'build/assets/img/tempe.jpg', 'name' => 'Keripik Pedas', 'price' => 25000],
            ['img' => 'build/assets/img/pisang.jpeg', 'name' => 'Rendang Telur', 'price' => 25000],
            ['img' => 'build/assets/img/balado.jpg', 'name' => 'Bola Ubi', 'price' => 25000],
        ];
    @endphp

    @foreach($products as $p)
    <div class="bg-white rounded-xl shadow p-4 text-center">
        
        <!-- TANPA asset() -->
        <img src="/{{ $p['img'] }}" class="w-40 h-32 object-cover mx-auto mb-3 rounded-lg shadow">

        <h4 class="font-bold text-gray-800">{{ $p['name'] }}</h4>
        <p class="text-gray-600 mb-3">
            Rp {{ number_format($p['price'], 0, ',', '.') }}
        </p>

        <div class="flex justify-center space-x-3">
            <a href="#" class="px-4 py-1 border rounded-lg text-gray-700 hover:bg-gray-100 transition">
                Lihat Detail
            </a>

            <a href="#"
               class="px-4 py-1 bg-[#C89560] text-white font-semibold rounded-lg hover:bg-[#b1804e] transition">
               Beli
            </a>
        </div>

    </div>
    @endforeach

</section>

@endsection

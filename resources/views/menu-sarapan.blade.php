@extends('layouts.landing-layout')

@section('content')

<!-- HERO -->
<section class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

    <!-- Text -->
    <div>
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Menu Kuliner Khas Mami Ersa</h2>
        <p class="text-gray-600 mb-4">
            Nikmati kelezatan berbagai macam menu sarapan dengan kualitas terbaik.
        </p>

        <!-- Search -->
        <input type="text" placeholder="Cari Menu Favorit Anda"
            class="w-full p-3 border rounded-full shadow-sm focus:ring-2 focus:ring-yellow-600">
    </div>

    <!-- Image -->
    <div class="flex justify-center">
        <img src="/images/ketupat.jpeg" alt="sarapan" class="w-72">
    </div>
</section>

<!-- Header Section -->
<div class="w-full bg-[#E3C474] py-6 mt-4">
    <h3 class="text-center text-xl font-bold text-gray-800">Menu Kuliner Favorit</h3>
</div>

<!-- Produk -->
<section class="max-w-6xl mx-auto px-6 py-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

    @php
        $foods = [
            ['img' => '/images/ketupat.jpeg', 'name' => 'Lontong', 'price' => 25000],
            ['img' => '/images/bakwan.jpg', 'name' => 'Laksa', 'price' => 25000],
            ['img' => '/images/ketupat.jpeg', 'name' => 'Tempe Mendoan', 'price' => 25000],
            ['img' => '/images/bakwan.jpg', 'name' => 'Gorengan Spesial', 'price' => 25000],
            ['img' => '/images/ketupat.jpeg', 'name' => 'Soto Ayam', 'price' => 25000],
            ['img' => '/images/ketupat.jpeg', 'name' => 'Bubur', 'price' => 25000],
        ];
    @endphp

    @foreach($foods as $f)
    <div class="bg-white rounded-xl shadow p-4 text-center">
        <img src="{{ $f['img'] }}" class="w-40 h-32 mx-auto mb-3 object-cover">
        <h4 class="font-bold text-gray-800">{{ $f['name'] }}</h4>
        <p class="text-gray-600 mb-3">Rp {{ number_format($f['price'], 0, ',', '.') }}</p>

        <div class="flex justify-center space-x-3">
            <a href="#" class="px-4 py-1 border rounded-lg text-gray-700 hover:bg-gray-100">Lihat Detail</a>
            <a href="#" class="px-4 py-1 bg-[#C89560] text-white font-semibold rounded-lg hover:bg-[#b1804e]">Beli</a>
        </div>
    </div>
    @endforeach

</section>

@endsection

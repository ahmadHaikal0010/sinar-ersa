@extends('layouts.landing-layout')

@section('content')
<section class="container mx-auto px-6 py-12">
    <h1 class="text-2xl font-bold mb-6">Daftar Menu</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-7">

        <!-- AYAM BALADO -->
        <div class="bg-white shadow p-5 rounded-xl">
            <img src="build/assets/img/balado.jpg" class="rounded-md mb-3 w-full h-56 object-cover">
            <h3 class="font-bold text-lg">Ayam Balado</h3>
            <p class="text-gray-600 mb-3">Rp 18.000</p>
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg">Pesan</button>
        </div>

        <!-- IKAN BALADO -->
        <div class="bg-white shadow p-5 rounded-xl">
            <img src="build/assets/img/tempe.jpg" class="rounded-md mb-3 w-full h-56 object-cover">
            <h3 class="font-bold text-lg">Ikan Balado</h3>
            <p class="text-gray-600 mb-3">Rp 20.000</p>
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg">Pesan</button>
        </div>

        <!-- SOTO AYAM -->
        <div class="bg-white shadow p-5 rounded-xl">
            <img src="build/assets/img/pisang.jpeg" class="rounded-md mb-3 w-full h-56 object-cover">
            <h3 class="font-bold text-lg">Soto Ayam</h3>
            <p class="text-gray-600 mb-3">Rp 12.000</p>
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg">Pesan</button>
        </div>

    </div>
</section>
@endsection

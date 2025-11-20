@extends('layouts.app')

@section('content')
    <!-- STATISTIK -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">

        <div class="flex flex-col items-center justify-center p-4 rounded-xl-custom bg-stat-card shadow">
            <div class="text-4xl font-bold">5</div>
            <div class="text-gray-700 mt-1">Total Produk</div>
        </div>

        <div class="flex flex-col items-center justify-center p-4 rounded-xl-custom bg-stat-card shadow">
            <div class="text-4xl font-bold">2</div>
            <div class="text-gray-700 mt-1">Total Transaksi</div>
        </div>

        <div class="flex flex-col items-center justify-center p-4 rounded-xl-custom bg-stat-card shadow">
            <div class="text-4xl font-bold">5</div>
            <div class="text-gray-700 mt-1">Menunggu Konfirmasi</div>
        </div>

        <div class="flex flex-col items-center justify-center p-4 rounded-xl-custom bg-stat-card shadow">
            <div class="text-2xl font-bold">Rp 150.000</div>
            <div class="text-gray-700 mt-1">Total Pendapatan</div>
        </div>

    </div>

    <h2 class="font-semibold text-gray-700 text-lg mb-4">AKSI CEPAT ADMIN</h2>

    <div class="flex space-x-4 mb-10">
        <a href="{{ route('admin.menu.index') }}" class="px-6 py-3 rounded-lg text-white bg-action-btn shadow">
            Tambah Menu
        </a>

        <a href="#" class="px-6 py-3 rounded-lg text-white bg-action-btn shadow">Tambah Kategori</a>
        <a href="#" class="px-6 py-3 rounded-lg text-white bg-action-btn shadow">Kelola Penjualan</a>
    </div>

    <h2 class="font-semibold text-gray-700 text-lg mb-4">INFORMASI TERBARU</h2>

    <div class="bg-white p-6 rounded-xl shadow">

        <div class="grid grid-cols-4 font-semibold text-gray-600 border-b pb-3">
            <div>Nama Menu</div>
            <div>Stock</div>
            <div>Harga</div>
            <div>Jumlah Pesanan</div>
        </div>

        <div class="grid grid-cols-4 py-3 hover:bg-gray-50">
            <div class="font-medium text-gray-900">Nasi Goreng</div>
            <div class="text-gray-600">15</div>
            <div class="text-gray-600">Rp 25.000</div>
            <div class="text-gray-600">5</div>
        </div>

    </div>
@endsection

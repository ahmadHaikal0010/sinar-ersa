@extends('layouts.app')

@section('content')
    <!-- STATISTIK -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">

        <div class="flex flex-col items-center justify-center p-4 rounded-xl-custom bg-stat-card shadow">
            <div class="text-4xl font-bold">{{ count($menus) }}</div>
            <div class="text-gray-700 mt-1">Total Produk</div>
        </div>

        <div class="flex flex-col items-center justify-center p-4 rounded-xl-custom bg-stat-card shadow">
            <div class="text-4xl font-bold">{{ $transactionCount }}</div>
            <div class="text-gray-700 mt-1">Total Transaksi</div>
        </div>

        {{-- <div class="flex flex-col items-center justify-center p-4 rounded-xl-custom bg-stat-card shadow">
            <div class="text-4xl font-bold">5</div>
            <div class="text-gray-700 mt-1">Menunggu Konfirmasi</div>
        </div> --}}

        <div class="flex flex-col items-center justify-center p-4 rounded-xl-custom bg-stat-card shadow">
            <div class="text-2xl font-bold">Rp {{ number_format($totalPendapatanBulanIni, 0, ',', '.') }}</div>
            <div class="text-gray-700 mt-1">Total Pendapatan Bulan Ini</div>
        </div>

    </div>

    <h2 class="font-semibold text-gray-700 text-lg mb-4">AKSI CEPAT ADMIN</h2>

    <div class="flex space-x-4 mb-10">
        <a href="{{ route('admin.menu.create') }}" class="px-6 py-3 rounded-lg text-white bg-action-btn shadow">
            Tambah Menu
        </a>

        <a href="{{ route('admin.transaction.create') }}"
            class="px-6 py-3 rounded-lg text-white bg-action-btn shadow">Tambah Catatan Transaksi</a>
        {{-- <a href="#" class="px-6 py-3 rounded-lg text-white bg-action-btn shadow">Kelola Penjualan</a> --}}
    </div>

    <h2 class="font-semibold text-gray-700 text-lg mb-4">INFORMASI TERBARU</h2>

    <div class="bg-white p-6 rounded-xl shadow">

        <div class="grid grid-cols-4 font-semibold text-gray-600 border-b pb-3">
            <div>Nama Menu</div>
            <div>Deskripsi</div>
            <div>Kategori</div>
            <div>Harga</div>
        </div>

        @foreach ($menus as $menu)
            <div class="grid grid-cols-4 py-3 hover:bg-gray-50">
                <div class="text-gray-600">{{ $menu->nama }}</div>
                <div class="text-gray-600">{{ Str::limit($menu->deskripsi, 50) }}</div>
                <div class="text-gray-600">{{ $menu->kategori }}</div>
                <div class="text-gray-600">Rp {{ number_format($menu->harga, 0, ',', '.') }}</div>
            </div>
        @endforeach

    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto">

        <!-- Notifikasi Sukses -->
        @if (session('success'))
            <div
                class="mb-6 flex items-center gap-3 p-4 bg-green-50 border border-green-100 text-green-700 rounded-2xl animate-fade-in shadow-sm">
                <i class="bi bi-check-circle-fill text-xl"></i>
                <span class="text-sm font-bold">{{ session('success') }}</span>
            </div>
        @endif

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <nav class="flex mb-2 text-gray-400 text-[10px] font-black uppercase tracking-[0.2em]">
                    <ol class="inline-flex items-center space-x-2">
                        <li>Admin</li>
                        <li><i class="bi bi-chevron-right text-[8px]"></i></li>
                        <li class="text-[#B98B58]">Kelola Transaksi</li>
                    </ol>
                </nav>
                <h1 class="text-3xl font-black text-[#4A3728]">Data Transaksi</h1>
                <p class="text-gray-400 text-sm font-medium">Pantau arus masuk pesanan dan metode pembayaran.</p>
            </div>

            <a href="{{ route('admin.transaction.create') }}"
                class="inline-flex items-center gap-2 px-6 py-3 bg-[#4A3728] text-white rounded-2xl font-bold text-xs uppercase tracking-widest shadow-xl shadow-gray-200 hover:bg-[#E3C474] transition-all transform hover:-translate-y-1">
                <i class="bi bi-plus-circle-fill text-lg"></i> Tambah Transaksi
            </a>
        </div>

        <!-- Table Container -->
        <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50/50 border-b border-gray-100">
                            <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Menu &
                                Jumlah</th>
                            <th class="px-6 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Metode
                            </th>
                            <th class="px-6 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Total
                                Pesanan</th>
                            <th class="px-6 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Total
                                Harga</th>
                            <th
                                class="px-6 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] text-center">
                                Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-50">
                        @forelse ($transactions as $transaction)
                            <tr class="hover:bg-[#FFFBF5]/50 transition-colors group">

                                <!-- MENU & JUMLAH -->
                                <td class="px-8 py-5">
                                    <div class="flex flex-col">
                                        <span
                                            class="font-bold text-[#4A3728] text-base">{{ $transaction->menu->nama }}</span>
                                        <span class="text-[10px] font-black text-[#E3C474] uppercase tracking-wider">
                                            {{ $transaction->jumlah }} Pesanan
                                        </span>
                                    </div>
                                </td>

                                <!-- METODE -->
                                <td class="px-6 py-5">
                                    <span
                                        class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-tighter
                                    {{ $transaction->metode_transaksi == 'tunai' ? 'bg-blue-50 text-blue-600' : 'bg-purple-50 text-purple-600' }}">
                                        {{ $transaction->metode_transaksi }}
                                    </span>
                                </td>

                                <!-- TOTAL PESANAN -->
                                <td class="px-6 py-5">
                                    <p class="text-xs text-gray-400 leading-relaxed max-w-[200px] truncate">
                                        {{ $transaction->jumlah }}
                                    </p>
                                </td>

                                <!-- TOTAL HARGA -->
                                <td class="px-6 py-5">
                                    <span class="font-black text-[#4A3728]">
                                        Rp
                                        {{ number_format($transaction->jumlah * $transaction->menu->harga, 0, ',', '.') }}
                                    </span>
                                </td>

                                <!-- AKSI -->
                                <td class="px-6 py-5">
                                    <div class="flex justify-center items-center gap-2">
                                        <a href="{{ route('admin.transaction.show', $transaction) }}"
                                            class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-gray-400 hover:bg-[#E3C474] hover:text-white transition-all shadow-sm"
                                            title="Detail">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>

                                        <a href="{{ route('admin.transaction.edit', $transaction) }}"
                                            class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-gray-400 hover:bg-[#4A3728] hover:text-white transition-all shadow-sm"
                                            title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <form action="{{ route('admin.transaction.destroy', $transaction) }}"
                                            method="POST" onsubmit="return confirm('Hapus transaksi ini?')">
                                            @csrf @method('DELETE')
                                            <button type="submit"
                                                class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-red-300 hover:bg-red-500 hover:text-white transition-all shadow-sm">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-24 text-center">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                            <i class="bi bi-receipt text-3xl text-gray-200"></i>
                                        </div>
                                        <p class="text-gray-400 font-bold text-sm tracking-wide">Belum ada transaksi</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FAFAFA;
        }
    </style>
@endsection

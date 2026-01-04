@extends('layouts.app')

@section('content')
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-semibold text-gray-700">Detail Transaksi</h2>

        <a href="{{ route('admin.transaction.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:opacity-80">
            ← Kembali
        </a>
    </div>

    <!-- Card Detail -->
    <div class="bg-[#e6f0a6] p-6 rounded-2xl shadow-md max-w-3xl">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Jumlah -->
            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">
                    Jumlah
                </label>
                <div class="bg-white p-3 rounded-lg shadow">
                    {{ $transaction->jumlah }}
                </div>
            </div>

            <!-- Metode -->
            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">
                    Metode Transaksi
                </label>
                <div class="bg-white p-3 rounded-lg shadow">
                    {{ ucfirst($transaction->metode_transaksi) }}
                </div>
            </div>

            <!-- Total Harga -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-600 mb-1">
                    Total Harga
                </label>
                <div class="bg-white p-3 rounded-lg shadow">
                    Rp {{ number_format($transaction->jumlah * $transaction->menu->harga, 0, ',', '.') }}
                </div>
            </div>

            <!-- Menu -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-600 mb-1">
                    Menu
                </label>
                <div class="bg-white p-3 rounded-lg shadow">
                    {{ $transaction->menu->nama }}
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-gray-600 mb-1">
                    Deskripsi
                </label>
                <div class="bg-white p-3 rounded-lg shadow">
                    {{ $transaction->deskripsi }}
                </div>
            </div>

            <!-- Tanggal Dibuat -->
            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">
                    Tanggal Dibuat
                </label>
                <div class="bg-white p-3 rounded-lg shadow">
                    {{ $transaction->created_at->format('d M Y, H:i') }}
                </div>
            </div>

        </div>

        <!-- Action Buttons -->
        <div class="flex gap-3 mt-8">

            <!-- Edit -->
            <a href="{{ route('admin.transaction.edit', $transaction) }}"
                class="px-4 py-2 bg-[#E6A23C] text-white rounded-lg hover:opacity-80">
                ✏️ Edit
            </a>

            <!-- Delete -->
            <form action="{{ route('admin.transaction.destroy', $transaction) }}" method="POST"
                onsubmit="return confirm('Yakin ingin menghapus transaksi ini?')">
                @csrf
                @method('DELETE')

                <button type="submit" class="px-4 py-2 bg-[#D9534F] text-white rounded-lg hover:opacity-80">
                    🗑️ Hapus
                </button>
            </form>

        </div>

    </div>
@endsection

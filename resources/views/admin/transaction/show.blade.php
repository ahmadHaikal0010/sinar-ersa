@extends('layouts.app')

@section('content')
    <div class="p-6">
        <div class="bg-white p-6 rounded-2xl shadow-md max-w-3xl mx-auto">
            <h2 class="text-xl font-semibold mb-4">Detail Transaksi</h2>

            <div class="mb-3"><strong>Jumlah:</strong> {{ $transaction->jumlah }}</div>
            <div class="mb-3"><strong>Deskripsi:</strong> {{ $transaction->deskripsi }}</div>
            <div class="mb-3"><strong>Metode:</strong> {{ ucfirst($transaction->metode_transaksi) }}</div>

            <a href="{{ route('admin.transaction.index') }}"
                class="inline-block mt-4 px-4 py-2 bg-[#b98b58] text-white rounded-md">Kembali</a>
        </div>
    </div>
@endsection

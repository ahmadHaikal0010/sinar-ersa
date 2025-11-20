@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-gray-700">Kelola Transaksi</h2>

        <a href="{{ route('admin.transaction.create') }}">
            <button class="px-4 py-2 bg-[#b98b58] text-white rounded-lg shadow hover:opacity-90">
                + Tambah Transaksi
            </button>
        </a>
    </div>

    <div class="bg-[#e6f0a6] p-6 rounded-2xl shadow-md">

        <table class="w-full text-left">
            <thead>
                <tr class="text-gray-700 font-semibold">
                    <th class="pb-3">Jumlah</th>
                    <th class="pb-3">Deskripsi</th>
                    <th class="pb-3">Metode</th>
                    <th class="pb-3">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($transactions as $transaction)
                    <tr class="border-t border-gray-300">
                        <td class="py-3">{{ $transaction->jumlah }}</td>
                        <td class="py-3">{{ \Illuminate\Support\Str::limit($transaction->deskripsi, 80) }}</td>
                        <td class="py-3">{{ ucfirst($transaction->metode_transaksi) }}</td>

                        <td class="py-3 flex gap-2">
                            <a href="{{ route('admin.transaction.edit', $transaction) }}">
                                <button
                                    class="px-3 py-1 rounded-md bg-[#E6A23C] text-white text-sm hover:opacity-80 transition">
                                    Edit
                                </button>
                            </a>
                            <form action="{{ route('admin.transaction.destroy', $transaction) }}" method="POST"
                                onsubmit="return confirm('Hapus data transaksi ini?')">
                                @csrf @method('DELETE')
                                <button
                                    class="px-3 py-1 rounded-md bg-[#D9534F] text-white text-sm hover:opacity-80 transition">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection

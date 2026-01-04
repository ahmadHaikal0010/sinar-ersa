@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-gray-700">Kelola Transaksi</h2>

        <a href="{{ route('admin.transaction.create') }}"
            class="px-4 py-2 bg-[#b98b58] text-white rounded-lg shadow hover:opacity-90">
            + Tambah Transaksi
        </a>
    </div>

    <!-- Table -->
    <div class="bg-[#e6f0a6] p-6 rounded-2xl shadow-md overflow-x-auto">

        <table class="w-full text-left">
            <thead>
                <tr class="text-gray-700 font-semibold border-b border-gray-400">
                    <th class="pb-3">Nama Menu</th>
                    <th class="pb-3">Jumlah</th>
                    <th class="pb-3">Total Harga</th>
                    <th class="pb-3">Deskripsi</th>
                    <th class="pb-3">Metode</th>
                    <th class="pb-3 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($transactions as $transaction)
                    <tr class="border-b border-gray-300 hover:bg-[#f6f1c1]">

                        <td class="py-3">
                            {{ $transaction->menu->nama }}
                        </td>

                        <td class="py-3">
                            {{ $transaction->jumlah }}
                        </td>

                        <td class="py-3">
                            Rp {{ number_format($transaction->jumlah * $transaction->menu->harga, 0, ',', '.') }}
                        </td>


                        <td class="py-3">
                            {{ \Illuminate\Support\Str::limit($transaction->deskripsi, 80) }}
                        </td>

                        <td class="py-3">
                            {{ ucfirst($transaction->metode_transaksi) }}
                        </td>

                        <!-- AKSI -->
                        <td class="py-3">
                            <div class="flex justify-center gap-3">

                                <!-- DETAIL -->
                                <a href="{{ route('admin.transaction.show', $transaction) }}"
                                    class="p-2 bg-blue-500 text-white rounded-full hover:opacity-80" title="Detail">
                                    <!-- eye icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5
                                                                     c4.478 0 8.268 2.943 9.542 7
                                                                     -1.274 4.057-5.064 7-9.542 7
                                                                     -4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>

                                <!-- EDIT -->
                                <a href="{{ route('admin.transaction.edit', $transaction) }}"
                                    class="p-2 bg-yellow-500 text-white rounded-full hover:opacity-80" title="Edit">
                                    <!-- pencil icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5h2M12 4v16m8-8H4" />
                                    </svg>
                                </a>

                                <!-- HAPUS -->
                                <form action="{{ route('admin.transaction.destroy', $transaction) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus transaksi ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="p-2 bg-red-500 text-white rounded-full hover:opacity-80"
                                        title="Hapus">
                                        <!-- trash icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862
                                                                         a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6
                                                                         M9 7h6m2 0H7m3-3h4a1 1 0 011 1v1H9V5a1 1 0 011-1z" />
                                        </svg>
                                    </button>
                                </form>

                            </div>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-6 text-gray-500">
                            Data transaksi belum tersedia
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection

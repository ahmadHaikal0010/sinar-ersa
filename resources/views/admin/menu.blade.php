@extends('layouts.app')

@section('content')

<!-- Tombol Tambah Menu -->
<div class="flex justify-between items-center mb-4">
    <h2 class="text-lg font-semibold text-gray-700">Kelola Menu</h2>

    <a href="{{ route('create_menu') }}">
        <button class="px-4 py-2 bg-[#b98b58] text-white rounded-lg shadow hover:opacity-90">
            + Tambah Menu
        </button>
    </a>
</div>



<!-- Tabel Menu -->
<div class="bg-[#e6f0a6] p-6 rounded-2xl shadow-md">

    <table class="w-full text-left">
        <thead>
            <tr class="text-gray-700 font-semibold">
                <th class="pb-3">Nama Menu</th>
                <th class="pb-3">Gambar</th>
                <th class="pb-3">Harga</th>
                <th class="pb-3">Stock</th>
                <th class="pb-3">Kategori</th>
                <th class="pb-3">Aksi</th>
            </tr>
        </thead>

        <tbody>

            <!-- Row 1 -->
            <tr class="border-t border-gray-300">
                <td class="py-3">Ketupat</td>

                <td class="py-3">
                    <img src="{{ asset('images/ketupat.jpeg') }}" class="w-16 h-16 rounded-md object-cover shadow">
                </td>

                <td class="py-3">10</td>
                <td class="py-3">10</td>
                <td class="py-3">Makanan</td>

                <td class="py-3 flex gap-2">
                    <a href="{{ route('edit_menu', $m->id ?? 1) }}">
                        <button class="px-3 py-1 rounded-md bg-[#E6A23C] text-white text-sm hover:opacity-80 transition">
                            Edit
                        </button>
                    </a>
                    <button class="px-3 py-1 rounded-md bg-[#D9534F] text-white text-sm hover:opacity-80 transition">
                        Hapus
                    </button>
                </td>
            </tr>

            <!-- Row 2 -->
            <tr class="border-t border-gray-300">
                <td class="py-3">Gorengan</td>

                <td class="py-3">
                    <img src="{{ asset('images/bakwan.jpg') }}" class="w-16 h-16 rounded-md object-cover shadow">
                </td>

                <td class="py-3">10</td>
                <td class="py-3">10</td>
                <td class="py-3">Cemilan</td>

                <td class="py-3 flex gap-2">
                    <a href="{{ route('edit_menu', $m->id ?? 1) }}">
                        <button class="px-3 py-1 rounded-md bg-[#E6A23C] text-white text-sm hover:opacity-80 transition">
                            Edit
                        </button>
                    </a>
                    <button class="px-3 py-1 rounded-md bg-[#D9534F] text-white text-sm hover:opacity-80 transition">
                        Hapus
                    </button>
                </td>
            </tr>

        </tbody>
    </table>

</div>

@endsection

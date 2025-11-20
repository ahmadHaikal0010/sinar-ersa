@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-5">
    <!-- Judul -->
    <h2 class="text-xl font-semibold">Kelola Kategori</h2>

    <!-- Tombol Tambah Kategori di kanan -->
    <a href="#" class="px-4 py-2 rounded-md bg-[#B97A3A] text-white shadow hover:opacity-90 transition">
        + Tambah Kategori
    </a>
</div>
<div class="bg-white p-6 rounded-xl shadow">

    <table class="w-full text-left">
        <thead>
            <tr class="border-b">
                <th class="p-3">Nama Kategori</th>
                <th class="py-2">Jumlah Menu</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <tr class="border-b border-gray-300">
                <td class="py-3">Oleh-oleh</td>
                <td class="py-3">10</td>
                <td class="py-3 flex gap-3">
                    <button class="px-3 py-1 rounded-md bg-[#E6A23C] text-white text-sm hover:opacity-80 transition">
                        Edit
                    </button>
                    <button class="px-3 py-1 rounded-md bg-[#D9534F] text-white text-sm hover:opacity-80 transition">
                        Hapus
                    </button>
                </td>
            </tr>
                <tr>
                    <td class="py-3">Sarapan Pagi</td>
                    <td class="py-3">10</td>
                    <td class="py-3 flex gap-2">
                        <button class="px-3 py-1 rounded-md bg-[#E6A23C] text-white text-sm hover:opacity-80 transition">
                        Edit
                    </button>
                    <button class="px-3 py-1 rounded-md bg-[#D9534F] text-white text-sm hover:opacity-80 transition">
                        Hapus
                    </button>
                    </td>
                </tr>
        </tbody>
    </table>

</div>

@endsection

@extends('layouts.app')

@section('content')
<div class="p-6">

    <div class="bg-[#C8D47F] p-6 rounded-2xl shadow-md max-w-4xl mx-auto">

        <h2 class="text-xl font-semibold text-gray-700 mb-4">Edit Menu</h2>

        <form>

            {{-- Nama Menu --}}
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Nama Menu</label>
                <input type="text" class="w-full mt-1 p-2 rounded-md border border-gray-300">
            </div>

            {{-- Kategori --}}
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Kategori</label>
                <select class="w-full mt-1 p-2 rounded-md border border-gray-300">
                    <option>Pilih Kategori</option>
                </select>
            </div>

            {{-- Deskripsi --}}
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Deskripsi</label>
                <textarea class="w-full mt-1 p-2 rounded-md border border-gray-300" rows="3"></textarea>
            </div>

            {{-- Harga & Stok --}}
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block font-medium text-gray-700">Harga</label>
                    <input type="number" class="w-full mt-1 p-2 rounded-md border border-gray-300">
                </div>

                <div>
                    <label class="block font-medium text-gray-700">Stok</label>
                    <input type="number" class="w-full mt-1 p-2 rounded-md border border-gray-300">
                </div>
            </div>

            {{-- Gambar --}}
            <div class="mb-4">
                <label class="block font-medium text-gray-700">Gambar</label>
                <input type="file" class="w-full mt-1 p-2 rounded-md border border-gray-300">
            </div>

            {{-- Tombol --}}
            <div class="flex justify-end gap-3 mt-6">
                <a href="{{ route('pages.menu') }}"
                   class="px-6 py-2 bg-[#b98b58] text-white rounded-md shadow hover:opacity-90">
                    Kembali
                </a>

                <button type="button"
                        class="px-6 py-2 bg-red-500 text-white rounded-md shadow hover:bg-red-600">
                    Simpan
                </button>
            </div>

        </form>

    </div>
</div>
@endsection

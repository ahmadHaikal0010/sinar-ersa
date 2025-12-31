@extends('layouts.app')

@section('content')

<!-- Header -->
<div class="flex items-center justify-between mb-6">
    <h2 class="text-xl font-semibold text-gray-700">Detail Menu</h2>

    <a href="{{ route('admin.menu.index') }}"
       class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:opacity-80">
        ← Kembali
    </a>
</div>

<!-- Card Detail -->
<div class="bg-[#e6f0a6] p-6 rounded-2xl shadow-md max-w-3xl">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Nama Menu -->
        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Nama Menu
            </label>
            <div class="bg-white p-3 rounded-lg shadow">
                {{ $menu->nama }}
            </div>
        </div>

        <!-- Kategori -->
        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Kategori
            </label>
            <div class="bg-white p-3 rounded-lg shadow">
                {{ $menu->kategori }}
            </div>
        </div>

        <!-- Harga -->
        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Harga
            </label>
            <div class="bg-white p-3 rounded-lg shadow">
                Rp {{ number_format($menu->harga ?? 0, 0, ',', '.') }}
            </div>
        </div>

        <!-- Tanggal Dibuat -->
        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Tanggal Dibuat
            </label>
            <div class="bg-white p-3 rounded-lg shadow">
                {{ $menu->created_at->format('d M Y, H:i') }}
            </div>
        </div>

    </div>

    <!-- Action Buttons -->
    <div class="flex gap-3 mt-8">

        <!-- Edit -->
        <a href="{{ route('admin.menu.edit', $menu) }}"
           class="px-4 py-2 bg-[#E6A23C] text-white rounded-lg hover:opacity-80">
            ✏️ Edit
        </a>

        <!-- Delete -->
        <form action="{{ route('admin.menu.destroy', $menu) }}" method="POST"
              onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
            @csrf
            @method('DELETE')

            <button type="submit"
                class="px-4 py-2 bg-[#D9534F] text-white rounded-lg hover:opacity-80">
                🗑️ Hapus
            </button>
        </form>

    </div>

</div>

@endsection

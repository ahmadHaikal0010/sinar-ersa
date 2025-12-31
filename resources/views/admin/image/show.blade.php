@extends('layouts.app')

@section('content')

<!-- Header -->
<div class="flex items-center justify-between mb-6">
    <h2 class="text-lg font-semibold text-gray-700">Detail Image</h2>

    <a href="{{ route('admin.image.index') }}"
       class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:opacity-80 transition">
        ← Kembali
    </a>
</div>

<!-- Card -->
<div class="bg-[#e6f0a6] p-6 rounded-2xl shadow-md max-w-3xl">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">

        <!-- Image Preview -->
        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-2">
                Gambar
            </label>
            <div class="bg-white p-3 rounded-lg shadow flex justify-center">
                <img src="{{ $image->url }}"
                     class="max-h-64 object-contain rounded-md">
            </div>
        </div>

        <!-- Menu Info -->
        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-2">
                Menu Terkait
            </label>
            <div class="bg-white p-3 rounded-lg shadow">
                {{ $image->menu?->nama ?? '-' }}
            </div>

            <!-- Created At -->
            <div class="mt-4">
                <label class="block text-sm font-semibold text-gray-600 mb-2">
                    Tanggal Upload
                </label>
                <div class="bg-white p-3 rounded-lg shadow">
                    {{ $image->created_at->format('d M Y, H:i') }}
                </div>
            </div>
        </div>

    </div>

    <!-- Actions -->
    <div class="flex gap-3 mt-8">

        <!-- Edit -->
        <a href="{{ route('admin.image.edit', $image) }}"
           class="px-4 py-2 bg-[#E6A23C] text-white rounded-lg hover:opacity-80 transition">
            ✏️ Edit
        </a>

        <!-- Delete -->
        <form action="{{ route('admin.image.destroy', $image) }}"
              method="POST"
              onsubmit="return confirm('Hapus image ini?')">
            @csrf
            @method('DELETE')

            <button type="submit"
                    class="px-4 py-2 bg-[#D9534F] text-white rounded-lg hover:opacity-80 transition">
                🗑️ Hapus
            </button>
        </form>

    </div>

</div>

@endsection

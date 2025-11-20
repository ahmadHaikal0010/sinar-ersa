@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-gray-700">Kelola Image</h2>

        <a href="{{ route('admin.image.create') }}">
            <button class="px-4 py-2 bg-[#b98b58] text-white rounded-lg shadow hover:opacity-90">
                + Tambah Image
            </button>
        </a>
    </div>

    <div class="bg-[#e6f0a6] p-6 rounded-2xl shadow-md">

        <table class="w-full text-left">
            <thead>
                <tr class="text-gray-700 font-semibold">
                    <th class="pb-3">Gambar</th>
                    <th class="pb-3">Menu</th>
                    <th class="pb-3">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($images as $image)
                    <tr class="border-t border-gray-300">
                        <td class="py-3"><img src="{{ $image->url }}" class="w-24 h-16 object-cover rounded-md"></td>
                        <td class="py-3">{{ $image->menu?->nama ?? '-' }}</td>
                        <td class="py-3 flex gap-2">
                            <a href="{{ route('admin.image.edit', $image) }}">
                                <button
                                    class="px-3 py-1 rounded-md bg-[#E6A23C] text-white text-sm hover:opacity-80 transition">Edit</button>
                            </a>
                            <form action="{{ route('admin.image.destroy', $image) }}" method="POST"
                                onsubmit="return confirm('Hapus image ini?')">
                                @csrf @method('DELETE')
                                <button
                                    class="px-3 py-1 rounded-md bg-[#D9534F] text-white text-sm hover:opacity-80 transition">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection

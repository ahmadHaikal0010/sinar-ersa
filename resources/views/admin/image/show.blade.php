@extends('layouts.app')

@section('content')
    <div class="p-6">
        <div class="bg-white p-6 rounded-2xl shadow-md max-w-3xl mx-auto">
            <h2 class="text-xl font-semibold mb-4">Detail Image</h2>

            <div class="mb-3"><strong>Gambar:</strong><br><img src="{{ $image->url }}" class="w-full max-w-sm"></div>
            <div class="mb-3"><strong>Menu:</strong> {{ $image->menu?->nama ?? '-' }}</div>

            <a href="{{ route('admin.image.index') }}"
                class="inline-block mt-4 px-4 py-2 bg-[#b98b58] text-white rounded-md">Kembali</a>
        </div>
    </div>
@endsection

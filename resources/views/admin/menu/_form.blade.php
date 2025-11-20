@php
    $kategori = ['Kuliner' => 'Kuliner', 'Oleh-oleh' => 'Oleh-oleh'];
@endphp

{{-- Nama Menu --}}
<div class="mb-4">
    <label class="block font-medium text-gray-700">Nama Menu</label>
    <input type="text" name="nama"
        class="w-full mt-1 p-2 rounded-md border border-gray-300 @error('nama') is-invalid @enderror"
        value="{{ old('nama', $menu->nama ?? '') }}" placeholder="cth: Kerupuk">
    @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Kategori --}}
<div class="mb-4">
    <label class="block font-medium text-gray-700">Kategori</label>
    <select name="kategori" class="w-full mt-1 p-2 rounded-md border border-gray-300">
        <option disabled {{ old('kategori', $menu->kategori ?? '') == '' ? 'selected' : '' }}>Pilih Kategori</option>
        @foreach ($kategori as $val => $label)
            <option value="{{ $val }}" {{ old('kategori', $menu->kategori ?? '') == $val ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>
    @error('kategori')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Deskripsi --}}
<div class="mb-4">
    <label class="block font-medium text-gray-700">Deskripsi</label>
    <textarea name="deskripsi"
        class="w-full mt-1 p-2 rounded-md border border-gray-300 @error('deskripsi') is-invalid @enderror" rows="3">
        {{ old('deskripsi', $menu->deskripsi ?? '') }}
    </textarea>
    @error('deskripsi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Harga --}}
<div class="mb-4">
    <label class="block font-medium text-gray-700">Harga</label>
    <input type="number" name="harga"
        class="w-full mt-1 p-2 rounded-md border border-gray-300 @error('harga') is-invalid @enderror"
        value="{{ old('harga', $menu->harga ?? '') }}">
    @error('harga')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Tombol --}}
<div class="flex justify-end gap-3 mt-6">
    <a href="{{ route('admin.menu.index') }}"
        class="px-6 py-2 bg-[#b98b58] text-white rounded-md shadow hover:opacity-90">
        Kembali
    </a>

    <button type="submit" class="px-6 py-2 bg-red-500 text-white rounded-md shadow hover:bg-red-600">
        Simpan
    </button>
</div>

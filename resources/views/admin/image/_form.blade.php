{{-- Image file upload --}}
<div class="mb-4">
    <label class="block font-medium text-gray-700">Upload Gambar</label>
    <input type="file" name="image" accept="image/*"
        class="w-full mt-1 p-2 rounded-md border border-gray-300 @error('image') is-invalid @enderror">
    @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    @if (!empty($image->url))
        <div class="mt-2">
            <img src="{{ $image->url }}" class="w-32 h-32 object-cover rounded-md" alt="preview">
        </div>
    @endif
</div>

{{-- Menu association --}}
<div class="mb-4">
    <label class="block font-medium text-gray-700">Menu (opsional)</label>
    <select name="menu_id" class="w-full mt-1 p-2 rounded-md border border-gray-300">
        <option value="">Tidak ada</option>
        @foreach ($menus as $id => $name)
            <option value="{{ $id }}" {{ old('menu_id', $image->menu_id ?? '') == $id ? 'selected' : '' }}>
                {{ $name }}</option>
        @endforeach
    </select>
    @error('menu_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="flex justify-end gap-3 mt-6">
    <a href="{{ route('admin.image.index') }}"
        class="px-6 py-2 bg-[#b98b58] text-white rounded-md shadow hover:opacity-90">Kembali</a>
    <button type="submit" class="px-6 py-2 bg-red-500 text-white rounded-md shadow hover:bg-red-600">Simpan</button>
</div>

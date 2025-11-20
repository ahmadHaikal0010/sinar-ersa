@php
    $metode = ['tunai' => 'Tunai', 'transfer' => 'Transfer'];
@endphp

{{-- Jumlah --}}
<div class="mb-4">
    <label class="block font-medium text-gray-700">Jumlah</label>
    <input type="text" name="jumlah"
        class="w-full mt-1 p-2 rounded-md border border-gray-300 @error('jumlah') is-invalid @enderror"
        value="{{ old('jumlah', $transaction->jumlah ?? '') }}" placeholder="cth: 1">
    @error('jumlah')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Deskripsi --}}
<div class="mb-4">
    <label class="block font-medium text-gray-700">Deskripsi</label>
    <textarea name="deskripsi"
        class="w-full mt-1 p-2 rounded-md border border-gray-300 @error('deskripsi') is-invalid @enderror" rows="3">{{ old('deskripsi', $transaction->deskripsi ?? '') }}</textarea>
    @error('deskripsi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Metode --}}
<div class="mb-4">
    <label class="block font-medium text-gray-700">Metode Transaksi</label>
    <select name="metode_transaksi" class="w-full mt-1 p-2 rounded-md border border-gray-300">
        <option disabled {{ old('metode_transaksi', $transaction->metode_transaksi ?? '') == '' ? 'selected' : '' }}>
            Pilih Metode</option>
        @foreach ($metode as $val => $label)
            <option value="{{ $val }}"
                {{ old('metode_transaksi', $transaction->metode_transaksi ?? '') == $val ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
    </select>
    @error('metode_transaksi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Tombol --}}
<div class="flex justify-end gap-3 mt-6">
    <a href="{{ route('admin.transaction.index') }}"
        class="px-6 py-2 bg-[#b98b58] text-white rounded-md shadow hover:opacity-90">Kembali</a>

    <button type="submit" class="px-6 py-2 bg-red-500 text-white rounded-md shadow hover:bg-red-600">Simpan</button>
</div>

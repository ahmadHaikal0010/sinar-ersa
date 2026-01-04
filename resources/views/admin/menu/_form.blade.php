@php
    $kategori = ['Kuliner' => '🍲 Kuliner', 'Oleh-oleh' => '🎁 Oleh-oleh'];
@endphp

<div class="space-y-8">
    
    <!-- GRID: Nama & Kategori -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- Nama Menu --}}
        <div class="space-y-2">
            <label class="block text-sm font-bold text-[#4A3728] uppercase tracking-wider">
                <i class="bi bi-pencil-square me-2 text-[#E3C474]"></i> Nama Menu
            </label>
            <input type="text" name="nama"
                class="w-full bg-gray-50 border border-gray-100 p-4 rounded-2xl focus:ring-2 focus:ring-[#E3C474] outline-none transition-all @error('nama') border-red-500 @enderror"
                value="{{ old('nama', $menu->nama ?? '') }}" placeholder="cth: Kerupuk Jengkol">
            @error('nama')
                <p class="text-red-500 text-xs font-bold italic mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Kategori --}}
        <div class="space-y-2">
            <label class="block text-sm font-bold text-[#4A3728] uppercase tracking-wider">
                <i class="bi bi-tag me-2 text-[#E3C474]"></i> Kategori
            </label>
            <div class="relative">
                <select name="kategori" 
                    class="w-full bg-gray-50 border border-gray-100 p-4 rounded-2xl focus:ring-2 focus:ring-[#E3C474] outline-none appearance-none transition-all @error('kategori') border-red-500 @enderror">
                    <option value="" disabled {{ old('kategori', $menu->kategori ?? '') == '' ? 'selected' : '' }}>Pilih Kategori</option>
                    @foreach ($kategori as $val => $label)
                        <option value="{{ $val }}" {{ old('kategori', $menu->kategori ?? '') == $val ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-gray-400">
                    <i class="bi bi-chevron-down"></i>
                </div>
            </div>
            @error('kategori')
                <p class="text-red-500 text-xs font-bold italic mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Harga -->
    <div class="space-y-2">
        <label class="block text-sm font-bold text-[#4A3728] uppercase tracking-wider">
            <i class="bi bi-cash-stack me-2 text-[#E3C474]"></i> Harga (Rp)
        </label>
        <div class="relative">
            <span class="absolute inset-y-0 left-4 flex items-center font-bold text-gray-400">Rp</span>
            <input type="number" name="harga"
                class="w-full bg-gray-50 border border-gray-100 p-4 pl-12 rounded-2xl focus:ring-2 focus:ring-[#E3C474] outline-none transition-all @error('harga') border-red-500 @enderror"
                value="{{ old('harga', $menu->harga ?? '') }}" placeholder="0">
        </div>
        @error('harga')
            <p class="text-red-500 text-xs font-bold italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Deskripsi -->
    <div class="space-y-2">
        <label class="block text-sm font-bold text-[#4A3728] uppercase tracking-wider">
            <i class="bi bi-card-text me-2 text-[#E3C474]"></i> Deskripsi Produk
        </label>
        <textarea name="deskripsi"
            class="w-full bg-gray-50 border border-gray-100 p-4 rounded-2xl focus:ring-2 focus:ring-[#E3C474] outline-none transition-all @error('deskripsi') border-red-500 @enderror" 
            rows="4" placeholder="Ceritakan kelezatan menu ini...">{{ old('deskripsi', $menu->deskripsi ?? '') }}</textarea>
        @error('deskripsi')
            <p class="text-red-500 text-xs font-bold italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- SEKSI GAMBAR (Optional/Dianjurkan) -->
    <div class="p-6 bg-[#FFFBF5] rounded-[2rem] border border-[#E3C474]/20 space-y-4">
        <label class="block text-sm font-bold text-[#4A3728] uppercase tracking-wider">
            <i class="bi bi-image me-2 text-[#E3C474]"></i> Gambar Utama Menu
        </label>
        
       
    </div>

    <!-- Tombol Aksi -->
    <div class="flex flex-col sm:flex-row justify-end gap-4 mt-10 pt-6 border-t border-gray-100">
        <a href="{{ route('admin.menu.index') }}"
            class="px-8 py-4 bg-white text-gray-400 border border-gray-200 rounded-2xl font-bold text-sm text-center hover:bg-gray-50 transition-all">
            <i class="bi bi-arrow-left me-2"></i> Kembali
        </a>

        <button type="submit" 
            class="px-10 py-4 bg-[#4A3728] text-white rounded-2xl font-bold text-sm shadow-xl shadow-gray-200 hover:bg-[#E3C474] transform hover:-translate-y-1 transition-all duration-300">
            <i class="bi bi-check-circle me-2"></i> {{ isset($menu) ? 'Update Menu' : 'Simpan Menu' }}
        </button>
    </div>
</div>

<style>
    /* Menghilangkan panah pada input number */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
@php
    $metode = ['tunai' => 'Tunai', 'transfer' => 'Transfer'];
@endphp

<div class="bg-white rounded-[2.5rem] p-8 md:p-12 shadow-sm border border-gray-100">
    <div class="max-w-3xl mx-auto space-y-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            {{-- Jumlah --}}
            <div class="space-y-2">
                <label class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] ml-2">Jumlah Pesanan</label>
                <div class="relative group">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#E3C474] group-focus-within:text-[#4A3728] transition-colors">
                        <i class="bi bi-hash text-lg"></i>
                    </span>
                    <input type="number" name="jumlah"
                        class="w-full pl-12 pr-4 py-4 bg-gray-50 border-none rounded-2xl font-bold text-[#4A3728] focus:ring-4 focus:ring-[#E3C474]/20 transition-all placeholder:text-gray-300"
                        value="{{ old('jumlah', $transaction->jumlah ?? '') }}" placeholder="0">
                </div>
                @error('jumlah') <p class="text-[10px] text-red-500 font-bold mt-1 ml-2 uppercase">{{ $message }}</p> @enderror
            </div>

            {{-- Menu association --}}
            <div class="space-y-2">
                <label class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] ml-2">Pilih Menu</label>
                <div class="relative group">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[#E3C474] group-focus-within:text-[#4A3728] transition-colors">
                        <i class="bi bi-cup-hot-fill text-lg"></i>
                    </span>
                    <select name="menu_id" class="w-full pl-12 pr-4 py-4 bg-gray-50 border-none rounded-2xl font-bold text-[#4A3728] focus:ring-4 focus:ring-[#E3C474]/20 transition-all appearance-none">
                        <option disabled {{ old('menu_id', $transaction->menu_id ?? '') == '' ? 'selected' : '' }}>Pilih Menu</option>
                        @foreach ($menus as $id => $name)
                            <option value="{{ $id }}" {{ old('menu_id', $transaction->menu_id ?? '') == $id ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('menu_id') <p class="text-[10px] text-red-500 font-bold mt-1 ml-2 uppercase">{{ $message }}</p> @enderror
            </div>
        </div>

        {{-- Metode Transaksi --}}
        <div class="space-y-4">
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] ml-2">Metode Pembayaran</label>
            <div class="flex flex-wrap gap-4">
                @foreach ($metode as $val => $label)
                    <label class="relative flex-1 min-w-[140px] cursor-pointer group">
                        <input type="radio" name="metode_transaksi" value="{{ $val }}" class="peer hidden" 
                            {{ old('metode_transaksi', $transaction->metode_transaksi ?? '') == $val ? 'checked' : '' }}>
                        <div class="p-4 bg-gray-50 rounded-2xl border-2 border-transparent text-center transition-all 
                                    peer-checked:border-[#E3C474] peer-checked:bg-[#FFFBF5] group-hover:bg-gray-100">
                            <i class="bi {{ $val == 'tunai' ? 'bi-cash-stack' : 'bi-bank' }} text-xl mb-1 block {{ old('metode_transaksi', $transaction->metode_transaksi ?? '') == $val ? 'text-[#E3C474]' : 'text-gray-300' }}"></i>
                            <span class="text-xs font-black uppercase tracking-widest text-[#4A3728]">{{ $label }}</span>
                        </div>
                    </label>
                @endforeach
            </div>
        </div>

        {{-- Deskripsi --}}
        <div class="space-y-2">
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] ml-2">Catatan Tambahan</label>
            <textarea name="deskripsi" rows="4"
                class="w-full p-6 bg-gray-50 border-none rounded-[2rem] font-medium text-[#4A3728] focus:ring-4 focus:ring-[#E3C474]/20 transition-all placeholder:text-gray-300"
                placeholder="Tulis instruksi khusus di sini...">{{ old('deskripsi', $transaction->deskripsi ?? '') }}</textarea>
        </div>

        {{-- Tombol --}}
        <div class="flex flex-col md:flex-row justify-end gap-4 pt-6">
            <a href="{{ route('admin.transaction.index') }}"
                class="px-8 py-4 bg-gray-100 text-gray-400 rounded-2xl font-bold text-xs uppercase tracking-widest hover:bg-gray-200 transition-all text-center">
                Batal
            </a>

            <button type="submit" 
                class="px-12 py-4 bg-[#4A3728] text-white rounded-2xl font-bold text-xs uppercase tracking-widest shadow-xl shadow-gray-200 hover:bg-[#E3C474] transition-all transform hover:-translate-y-1">
                Simpan Transaksi
            </button>
        </div>

    </div>
</div>
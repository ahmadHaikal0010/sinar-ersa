<div class="space-y-8">
    
    <!-- SEKSI PRATINJAU GAMBAR (LIVE PREVIEW) -->
    <div class="bg-white p-8 rounded-[2.5rem] border border-gray-100 shadow-sm">
        <label class="block text-xs font-black text-[#4A3728] uppercase tracking-[0.2em] mb-6 text-center">
            Pratinjau Visual
        </label>

        <div class="flex flex-col items-center space-y-6">
            <!-- Frame Foto -->
            <div class="relative group">
                <div class="w-72 h-48 md:w-80 md:h-52 rounded-[2rem] overflow-hidden border-4 border-[#FFF7F0] shadow-2xl bg-gray-50 flex items-center justify-center transition-all duration-500 group-hover:scale-[1.02]">
                    @if(!empty($image->url))
                        <img id="image-preview" src="{{ $image->url }}" class="w-full h-full object-cover">
                    @else
                        <img id="image-preview" src="{{ asset('images/no-image.png') }}" class="w-full h-full object-cover opacity-20">
                        <div id="placeholder-icon" class="absolute inset-0 flex flex-col items-center justify-center text-gray-300">
                            <i class="bi bi-images text-5xl"></i>
                            <p class="text-[10px] font-black uppercase mt-2">Belum ada foto</p>
                        </div>
                    @endif
                </div>

                <!-- Tombol Upload Melayang -->
                <label for="image-upload" class="absolute -bottom-3 -right-3 bg-[#E3C474] text-white w-14 h-14 rounded-2xl flex items-center justify-center shadow-xl cursor-pointer hover:bg-[#4A3728] transition-all transform hover:rotate-12">
                    <i class="bi bi-camera-fill text-2xl"></i>
                    <input type="file" name="image" id="image-upload" class="hidden" accept="image/*" onchange="previewImage(event)">
                </label>
            </div>
            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Klik ikon kamera untuk upload file</p>
        </div>
    </div>

    <!-- SEKSI INPUT DATA -->
    <div class="grid grid-cols-1 gap-8">
        
        <!-- URL MANUAL (IMPORT URL) -->
        <div class="space-y-3">
            <label class="block text-xs font-black text-[#4A3728] uppercase tracking-widest">
                <i class="bi bi-link-45deg text-[#E3C474] mr-1"></i> Atau Import dari URL
            </label>
            <input type="text" name="url_manual" id="url_manual" 
                oninput="previewUrl(this.value)"
                class="w-full bg-white border border-gray-100 p-4 rounded-2xl focus:ring-2 focus:ring-[#E3C474] outline-none transition-all text-sm @error('url') border-red-500 @enderror"
                placeholder="https://contoh-link-gambar.com/foto.jpg"
                value="{{ old('url', $image->url ?? '') }}">
            @error('url') <p class="text-red-500 text-[10px] font-bold italic">{{ $message }}</p> @enderror
        </div>

        <!-- ASOSIASI MENU -->
        <div class="space-y-3">
            <label class="block text-xs font-black text-[#4A3728] uppercase tracking-widest">
                <i class="bi bi-egg-fried text-[#E3C474] mr-1"></i> Hubungkan ke Menu
            </label>
            <div class="relative">
                <select name="menu_id" class="w-full bg-white border border-gray-100 p-4 rounded-2xl focus:ring-2 focus:ring-[#E3C474] outline-none appearance-none cursor-pointer transition-all">
                    <option value="" disabled {{ old('menu_id', $image->menu_id ?? '') == '' ? 'selected' : '' }}>-- Pilih Menu Terkait --</option>
                    @foreach ($menus as $id => $name)
                        <option value="{{ $id }}" {{ old('menu_id', $image->menu_id ?? '') == $id ? 'selected' : '' }}>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>
                <i class="bi bi-chevron-down absolute right-5 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none"></i>
            </div>
            @error('menu_id') <p class="text-red-500 text-[10px] font-bold italic">{{ $message }}</p> @enderror
        </div>

    </div>

    <!-- ACTION BUTTONS -->
    <div class="flex flex-col sm:flex-row justify-end gap-4 pt-10 border-t border-gray-100">
        <a href="{{ route('admin.image.index') }}"
            class="px-8 py-4 bg-gray-100 text-gray-500 rounded-2xl font-bold text-xs uppercase tracking-widest hover:bg-gray-200 transition-all text-center">
            <i class="bi bi-arrow-left me-2"></i> Kembali
        </a>

        <button type="submit" 
            class="px-12 py-4 bg-[#4A3728] text-white rounded-2xl font-bold text-xs uppercase tracking-[0.2em] shadow-xl shadow-gray-200 hover:bg-[#E3C474] transform hover:-translate-y-1 transition-all duration-300">
            <i class="bi bi-check-circle me-2"></i> Simpan Gambar
        </button>
    </div>
</div>

<!-- SCRIPT LIVE PREVIEW -->
<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('image-preview');
            output.src = reader.result;
            output.classList.remove('opacity-20');
            document.getElementById('placeholder-icon')?.classList.add('hidden');
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    function previewUrl(url) {
        if (url.trim() !== "") {
            const output = document.getElementById('image-preview');
            output.src = url;
            output.classList.remove('opacity-20');
            document.getElementById('placeholder-icon')?.classList.add('hidden');
        }
    }
</script>
@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    
    <!-- Notifikasi Sukses -->
    @if (session('success'))
        <div class="mb-6 flex items-center gap-3 p-4 bg-green-50 border border-green-100 text-green-700 rounded-2xl animate-fade-in">
            <i class="bi bi-check-circle-fill text-xl"></i>
            <span class="text-sm font-bold">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <nav class="flex mb-2 text-gray-400 text-[10px] font-black uppercase tracking-[0.2em]">
                <ol class="inline-flex items-center space-x-2">
                    <li>Admin</li>
                    <li><i class="bi bi-chevron-right text-[8px]"></i></li>
                    <li class="text-[#B98B58]">Kelola Menu</li>
                </ol>
            </nav>
            <h1 class="text-3xl font-black text-[#4A3728]">Daftar Menu Makanan</h1>
        </div>

        <a href="{{ route('admin.menu.create') }}"
           class="inline-flex items-center gap-2 px-6 py-3 bg-[#4A3728] text-white rounded-2xl font-bold text-xs uppercase tracking-widest shadow-xl shadow-gray-200 hover:bg-[#E3C474] transition-all transform hover:-translate-y-1">
            <i class="bi bi-plus-lg text-lg"></i> Tambah Menu Baru
        </a>
    </div>

    <!-- Table Container -->
    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/50 border-b border-gray-100">
                        <th class="px-8 py-5 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Produk</th>
                        <th class="px-6 py-5 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Harga</th>
                        <th class="px-6 py-5 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Kategori</th>
                        <th class="px-6 py-5 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-50">
                    @foreach ($menus as $menu)
                        <tr class="hover:bg-[#FFFBF5]/50 transition-colors group">
                            
                            <!-- PRODUK (Image + Name) -->
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-4">
                                    <div class="w-14 h-14 rounded-2xl overflow-hidden shadow-sm border-2 border-white">
                                        @if($menu->images->isNotEmpty())
                                            <img src="{{ $menu->images->first()->url }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        @else
                                            <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-300">
                                                <i class="bi bi-image text-xl"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="font-bold text-[#4A3728] leading-tight">{{ $menu->nama }}</p>
                                        
                                    </div>
                                </div>
                            </td>

                            <!-- HARGA -->
                            <td class="px-6 py-5">
                                <span class="font-black text-[#E3C474] text-sm">
                                    Rp {{ number_format($menu->harga, 0, ',', '.') }}
                                </span>
                            </td>

                            <!-- KATEGORI -->
                            <td class="px-6 py-5">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest 
                                    {{ $menu->kategori == 'Kuliner' ? 'bg-green-50 text-green-600' : 'bg-[#FFF7F0] text-[#B98B58]' }}">
                                    {{ $menu->kategori }}
                                </span>
                            </td>

                            <!-- AKSI -->
                            <td class="px-6 py-5">
                                <div class="flex justify-center items-center gap-2">
                                    
                                    <!-- DETAIL -->
                                    <a href="{{ route('admin.menu.show', $menu) }}"
                                       class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-gray-400 hover:bg-[#E3C474] hover:text-white transition-all shadow-sm"
                                       title="Lihat Detail">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>

                                    <!-- EDIT -->
                                    <a href="{{ route('admin.menu.edit', $menu) }}"
                                       class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-gray-400 hover:bg-[#4A3728] hover:text-white transition-all shadow-sm"
                                       title="Edit Menu">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <!-- HAPUS -->
                                    <form action="{{ route('admin.menu.destroy', $menu) }}"
                                          method="POST"
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu {{ $menu->nama }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-red-300 hover:bg-red-500 hover:text-white transition-all shadow-sm"
                                                title="Hapus Menu">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Empty State jika menu kosong -->
        @if($menus->isEmpty())
            <div class="py-20 text-center">
                <i class="bi bi-inbox text-5xl text-gray-200"></i>
                <p class="text-gray-400 mt-4 font-medium">Belum ada menu yang terdaftar.</p>
            </div>
        @endif
    </div>

    <!-- Pagination (Jika ada) -->
    <div class="mt-8">
        {{ $menus->links() }}
    </div>

</div>

<style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #FAFAFA; }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeIn 0.4s ease-out forwards;
    }
</style>
@endsection
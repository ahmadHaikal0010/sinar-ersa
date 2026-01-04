@extends('layouts.admin-layout')

@section('content')
<!-- Google Fonts & Icons -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="max-w-7xl mx-auto">
    
    <!-- Notifikasi Sukses -->
    @if (session('success'))
        <div class="mb-6 flex items-center gap-3 p-4 bg-green-50 border border-green-100 text-green-700 rounded-2xl animate-fade-in shadow-sm">
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
                    <li class="text-[#B98B58]">Galeri Foto</li>
                </ol>
            </nav>
            <h1 class="text-3xl font-black text-[#4A3728]">Aset Visual Menu</h1>
            <p class="text-gray-400 text-sm font-medium">Kelola foto-foto produk untuk tampilan website utama.</p>
        </div>

        <a href="{{ route('admin.image.create') }}"
           class="inline-flex items-center gap-2 px-6 py-3 bg-[#4A3728] text-white rounded-2xl font-bold text-xs uppercase tracking-widest shadow-xl shadow-gray-200 hover:bg-[#E3C474] transition-all transform hover:-translate-y-1">
            <i class="bi bi-plus-circle-fill text-lg"></i> Tambah Foto Baru
        </a>
    </div>

    <!-- Table Container -->
    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/50 border-b border-gray-100">
                        <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Pratinjau Foto</th>
                        <th class="px-6 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Relasi Menu</th>
                        <th class="px-6 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-50">
                    @forelse ($images as $image)
                        <tr class="hover:bg-[#FFFBF5]/50 transition-colors group">
                            
                            <!-- GAMBAR (Pratinjau Besar) -->
                            <td class="px-8 py-5">
                                <div class="relative w-40 h-24 rounded-2xl overflow-hidden shadow-md border-4 border-white group-hover:shadow-xl transition-all duration-500">
                                    <img src="{{ $image->url }}" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors"></div>
                                </div>
                            </td>

                            <!-- RELASI MENU -->
                            <td class="px-6 py-5">
                                @if($image->menu)
                                    <div class="flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-[#E3C474]"></span>
                                        <p class="font-bold text-[#4A3728]">{{ $image->menu->nama }}</p>
                                    </div>
                                    <p class="text-[10px] text-gray-400 uppercase font-medium mt-1 ml-4">{{ $image->menu->kategori }}</p>
                                @else
                                    <span class="text-xs italic text-gray-300">Tanpa Relasi Menu</span>
                                @endif
                            </td>

                            <!-- AKSI -->
                            <td class="px-6 py-5">
                                <div class="flex justify-center items-center gap-2">
                                    
                                    <!-- DETAIL -->
                                    <a href="{{ route('admin.image.show', $image) }}"
                                       class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-gray-400 hover:bg-[#E3C474] hover:text-white transition-all shadow-sm"
                                       title="Detail">
                                        <i class="bi bi-fullscreen"></i>
                                    </a>

                                    <!-- EDIT -->
                                    <a href="{{ route('admin.image.edit', $image) }}"
                                       class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-gray-400 hover:bg-[#4A3728] hover:text-white transition-all shadow-sm"
                                       title="Ganti Foto">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <!-- HAPUS -->
                                    <form action="{{ route('admin.image.destroy', $image) }}"
                                          method="POST"
                                          onsubmit="return confirm('Hapus foto ini dari galeri?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-red-300 hover:bg-red-500 hover:text-white transition-all shadow-sm"
                                                title="Hapus">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="py-24 text-center">
                                <div class="flex flex-col items-center">
                                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mb-4">
                                        <i class="bi bi-images text-3xl text-gray-200"></i>
                                    </div>
                                    <p class="text-gray-400 font-bold text-sm tracking-wide">Belum ada koleksi foto</p>
                                    <p class="text-gray-300 text-xs mt-1">Klik tombol di atas untuk menambah foto pertama Anda.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-8 px-4">
        {{ $images->links() }}
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

    /* Kustomisasi Pagination Laravel agar senada */
    .pagination { display: flex; gap: 0.5rem; }
    .page-item.active .page-link { background-color: #E3C474 !important; border-color: #E3C474 !important; }
    .page-link { border-radius: 0.75rem !important; color: #4A3728 !important; }
</style>
@endsection
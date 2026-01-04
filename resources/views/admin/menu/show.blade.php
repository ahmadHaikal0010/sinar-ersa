@extends('layouts.app')

@section('content')
<!-- Google Fonts & Icons -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="max-w-5xl mx-auto">
    
    <!-- Top Bar: Navigation & Title -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <nav class="flex mb-2 text-gray-400 text-[10px] font-black uppercase tracking-[0.2em]">
                <ol class="inline-flex items-center space-x-2">
                    <li><a href="{{ route('admin.menu.index') }}" class="hover:text-[#E3C474]">Manajemen Menu</a></li>
                    <li><i class="bi bi-chevron-right text-[8px]"></i></li>
                    <li class="text-[#B98B58]">Detail Menu</li>
                </ol>
            </nav>
            <h1 class="text-3xl font-black text-[#4A3728]">Pratinjau Produk</h1>
        </div>

        <a href="{{ route('admin.menu.index') }}"
           class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-500 rounded-2xl font-bold text-xs uppercase tracking-widest shadow-sm border border-gray-100 hover:bg-gray-50 transition-all">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- Main Detail Card -->
    <div class="bg-white rounded-[3rem] shadow-xl shadow-gray-200/50 border border-gray-50 overflow-hidden">
        <div class="flex flex-col lg:flex-row">
            
            <!-- Side 1: Image Showcase -->
            <div class="lg:w-2/5 p-8 bg-[#FFFBF5]">
                <div class="sticky top-8">
                    <div class="relative group">
                        <div class="aspect-square rounded-[2.5rem] overflow-hidden shadow-2xl border-4 border-white bg-white">
                            @if($menu->images->isNotEmpty())
                                <img src="{{ $menu->images->first()->url }}" alt="{{ $menu->nama }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex flex-col items-center justify-center text-gray-200">
                                    <i class="bi bi-image text-7xl"></i>
                                    <p class="text-[10px] font-black uppercase mt-4">Tidak ada foto</p>
                                </div>
                            @endif
                        </div>
                        <!-- Category Badge Over Image -->
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-4 py-2 rounded-2xl shadow-sm border border-gray-100">
                            <p class="text-[10px] font-black text-[#E3C474] uppercase tracking-widest">
                                {{ $menu->kategori }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side 2: Text Details -->
            <div class="lg:w-3/5 p-8 lg:p-12 flex flex-col justify-between">
                <div>
                    <div class="mb-8">
                        <h2 class="text-4xl font-black text-[#4A3728] mb-2">{{ $menu->nama }}</h2>
                        <div class="flex items-center gap-4">
                            <span class="text-3xl font-black text-[#E3C474]">Rp {{ number_format($menu->harga ?? 0, 0, ',', '.') }}</span>
                            <span class="h-6 w-[1px] bg-gray-200"></span>
                            <span class="text-xs font-bold text-green-500 uppercase tracking-widest flex items-center gap-1">
                                <i class="bi bi-check-circle-fill"></i> Tersedia
                            </span>
                        </div>
                    </div>

                    <div class="space-y-8">
                        <!-- Description -->
                        <div>
                            <h4 class="text-xs font-black text-gray-400 uppercase tracking-widest mb-3">Deskripsi Menu</h4>
                            <p class="text-gray-600 leading-relaxed font-light italic">
                                "{{ $menu->deskripsi ?? 'Tidak ada deskripsi untuk menu ini.' }}"
                            </p>
                        </div>

                        <!-- Stats/Meta -->
                        <div class="grid grid-cols-2 gap-6 p-6 bg-gray-50 rounded-[2rem] border border-gray-100">
                            <div>
                                <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Dibuat Pada</h4>
                                <p class="text-sm font-bold text-[#4A3728]">{{ $menu->created_at->format('d M Y') }}</p>
                            </div>
                            <div>
                                <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Waktu</h4>
                                <p class="text-sm font-bold text-[#4A3728]">{{ $menu->created_at->format('H:i') }} WIB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-12 pt-8 border-t border-gray-50 flex flex-wrap gap-4">
                    <!-- Edit -->
                    <a href="{{ route('admin.menu.edit', $menu) }}"
                       class="flex-1 inline-flex items-center justify-center gap-2 px-8 py-4 bg-[#4A3728] text-white rounded-2xl font-bold text-xs uppercase tracking-widest shadow-lg shadow-gray-200 hover:bg-[#E3C474] transition-all transform hover:-translate-y-1">
                        <i class="bi bi-pencil-square"></i> Edit Menu
                    </a>

                    <!-- Delete -->
                    <form action="{{ route('admin.menu.destroy', $menu) }}" method="POST"
                          class="flex-1"
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus menu ini secara permanen?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="w-full inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-red-500 border border-red-100 rounded-2xl font-bold text-xs uppercase tracking-widest hover:bg-red-50 transition-all">
                            <i class="bi bi-trash3"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Optional: Footer Insight -->
    <div class="mt-8 text-center">
        <p class="text-[10px] font-bold text-gray-300 uppercase tracking-[0.3em]">ID Produk: #{{ $menu->id }} • Dapur Mami Ersa Admin System</p>
    </div>
</div>

<style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #FFF7F0; }
</style>
@endsection
@extends('layouts.app')

@section('content')
<!-- Google Fonts & Icons -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="max-w-7xl mx-auto px-2">
    
    <!-- HEADER & GREETING -->
    <div class="mb-10">
        <nav class="flex mb-2 text-gray-400 text-[10px] font-black uppercase tracking-[0.2em]">
            <ol class="inline-flex items-center space-x-2">
                <li class="text-[#B98B58]">Dashboard</li>
                <li><i class="bi bi-chevron-right text-[8px]"></i></li>
                <li>Ringkasan Statistik</li>
            </ol>
        </nav>
        <h1 class="text-3xl font-black text-[#4A3728]">Selamat Datang, Admin! 👋</h1>
        <p class="text-gray-400 text-sm mt-1 font-medium">Berikut adalah rangkuman performa Dapur Mami Ersa hari ini.</p>
    </div>

    <!-- STATISTIK CARDS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">

        <!-- Total Produk -->
        <div class="relative overflow-hidden bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 group transition-all hover:shadow-xl">
            <div class="absolute top-0 right-0 w-24 h-24 bg-[#E3C474]/10 rounded-full -mr-10 -mt-10 transition-transform group-hover:scale-150"></div>
            <div class="flex items-center gap-6 relative z-10">
                <div class="w-16 h-16 bg-[#FFF7F0] text-[#E3C474] rounded-2xl flex items-center justify-center text-3xl shadow-inner">
                    <i class="bi bi-egg-fried"></i>
                </div>
                <div>
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Total Produk</p>
                    <h3 class="text-3xl font-black text-[#4A3728]">{{ count($menus) }}</h3>
                </div>
            </div>
        </div>

        <!-- Total Transaksi -->
        <div class="relative overflow-hidden bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100 group transition-all hover:shadow-xl">
            <div class="absolute top-0 right-0 w-24 h-24 bg-[#4A3728]/5 rounded-full -mr-10 -mt-10 transition-transform group-hover:scale-150"></div>
            <div class="flex items-center gap-6 relative z-10">
                <div class="w-16 h-16 bg-gray-50 text-[#4A3728] rounded-2xl flex items-center justify-center text-3xl shadow-inner">
                    <i class="bi bi-receipt-cutoff"></i>
                </div>
                <div>
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Total Transaksi</p>
                    <h3 class="text-3xl font-black text-[#4A3728]">{{ $transactionCount }}</h3>
                </div>
            </div>
        </div>

        <!-- Total Pendapatan -->
        <div class="relative overflow-hidden bg-[#4A3728] p-8 rounded-[2.5rem] shadow-xl shadow-gray-200 group transition-all">
            <div class="absolute bottom-0 right-0 w-32 h-32 bg-white/5 rounded-full -mb-10 -mr-10"></div>
            <div class="flex items-center gap-6 relative z-10">
                <div class="w-16 h-16 bg-white/10 text-[#E3C474] rounded-2xl flex items-center justify-center text-3xl">
                    <i class="bi bi-wallet2"></i>
                </div>
                <div>
                    <p class="text-[10px] font-black text-white/50 uppercase tracking-widest">Pendapatan Bulan Ini</p>
                    <h3 class="text-2xl font-black text-white">Rp {{ number_format($totalPendapatanBulanIni, 0, ',', '.') }}</h3>
                </div>
            </div>
        </div>

    </div>

    <!-- AKSI CEPAT -->
    <div class="mb-12">
        <h2 class="text-xs font-black text-gray-400 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
            <span class="w-8 h-[1px] bg-gray-200"></span>
            Aksi Cepat Admin
        </h2>
        <div class="flex flex-wrap gap-4">
            <a href="{{ route('admin.menu.create') }}" 
               class="inline-flex items-center gap-3 px-8 py-4 bg-white text-[#4A3728] border border-gray-100 rounded-2xl font-bold text-xs uppercase tracking-widest shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                <i class="bi bi-plus-circle text-lg text-[#E3C474]"></i> Tambah Menu Baru
            </a>

            <a href="{{ route('admin.transaction.create') }}" 
               class="inline-flex items-center gap-3 px-8 py-4 bg-white text-[#4A3728] border border-gray-100 rounded-2xl font-bold text-xs uppercase tracking-widest shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                <i class="bi bi-pencil-square text-lg text-[#E3C474]"></i> Catat Transaksi
            </a>
        </div>
    </div>

    <!-- INFORMASI TERBARU (TABEL) -->
    <div class="mb-10">
        <h2 class="text-xs font-black text-gray-400 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
            <span class="w-8 h-[1px] bg-gray-200"></span>
            Informasi Menu Terbaru
        </h2>

        <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-gray-50/50 border-b border-gray-50">
                            <th class="px-8 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest">Nama Produk</th>
                            <th class="px-6 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest">Kategori</th>
                            <th class="px-6 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest">Harga</th>
                            <th class="px-6 py-5 text-[10px] font-black text-gray-400 uppercase tracking-widest text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @foreach ($menus as $menu)
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="px-8 py-4">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-xl bg-gray-100 overflow-hidden shadow-inner border border-white">
                                            @if($menu->images->isNotEmpty())
                                                <img src="{{ $menu->images->first()->url }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-gray-300">
                                                    <i class="bi bi-image"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="font-bold text-[#4A3728] leading-none">{{ $menu->nama }}</p>
                                            <p class="text-[10px] text-gray-400 mt-1 italic">{{ Str::limit($menu->deskripsi, 40) }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-3 py-1 bg-[#FFF7F0] text-[#B98B58] rounded-full text-[10px] font-black uppercase tracking-widest">
                                        {{ $menu->kategori }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="font-black text-[#4A3728] text-sm">Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <span class="w-2 h-2 rounded-full bg-green-500 inline-block shadow-[0_0_8px_rgba(34,197,94,0.6)]"></span>
                                    <span class="text-[10px] font-bold text-gray-400 uppercase ml-1">Aktif</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            @if($menus->isEmpty())
                <div class="py-20 text-center">
                    <i class="bi bi-inbox text-5xl text-gray-200"></i>
                    <p class="text-gray-400 mt-4 font-bold text-sm">Belum ada menu terdaftar.</p>
                </div>
            @endif
        </div>
    </div>

</div>

<style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #FAFAFA; }
    
    /* Animasi Halus */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    main > div {
        animation: fadeInUp 0.6s ease-out forwards;
    }
</style>
@endsection
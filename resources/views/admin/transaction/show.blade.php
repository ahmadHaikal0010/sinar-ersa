@extends('layouts.app')

@section('content')
<!-- Google Fonts & Icons -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="max-w-4xl mx-auto px-2">
    
    <!-- Top Bar: Navigation & Title -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <nav class="flex mb-2 text-gray-400 text-[10px] font-black uppercase tracking-[0.2em]">
                <ol class="inline-flex items-center space-x-2">
                    <li><a href="{{ route('admin.transaction.index') }}" class="hover:text-[#E3C474]">Transaksi</a></li>
                    <li><i class="bi bi-chevron-right text-[8px]"></i></li>
                    <li class="text-[#B98B58]">Detail Invoice</li>
                </ol>
            </nav>
            <h1 class="text-3xl font-black text-[#4A3728]">Detail Transaksi</h1>
        </div>

        <a href="{{ route('admin.transaction.index') }}"
           class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-500 rounded-2xl font-bold text-xs uppercase tracking-widest shadow-sm border border-gray-100 hover:bg-gray-50 transition-all">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    <!-- Main Detail Card -->
    <div class="bg-white rounded-[3rem] shadow-xl shadow-gray-200/50 border border-gray-50 overflow-hidden animate-fade-in">
        
        <!-- Header Card: Status & Total -->
        <div class="bg-[#FFFBF5] p-8 md:p-12 border-b border-dashed border-gray-200 relative">
            <!-- Decorative Circles for Receipt Effect -->
            <div class="absolute -bottom-3 -left-3 w-6 h-6 bg-[#FAFAFA] rounded-full"></div>
            <div class="absolute -bottom-3 -right-3 w-6 h-6 bg-[#FAFAFA] rounded-full"></div>

            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                <div>
                    <p class="text-[10px] font-black text-[#E3C474] uppercase tracking-[0.3em] mb-2">Total Pembayaran</p>
                    <h2 class="text-4xl md:text-5xl font-black text-[#4A3728]">
                        Rp {{ number_format($transaction->jumlah * $transaction->menu->harga, 0, ',', '.') }}
                    </h2>
                </div>
                <div class="flex flex-col items-end">
                    <span class="px-4 py-2 bg-green-50 text-green-600 rounded-2xl text-[10px] font-black uppercase tracking-widest flex items-center gap-2 mb-2">
                        <i class="bi bi-check-circle-fill"></i> Transaksi Berhasil
                    </span>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-tighter">ID: #TRX-{{ $transaction->id }}{{ $transaction->created_at->format('is') }}</p>
                </div>
            </div>
        </div>

        <!-- Body Card: Information Grid -->
        <div class="p-8 md:p-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                
                <!-- Info Menu -->
                <div class="space-y-1">
                    <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Menu Pesanan</h4>
                    <div class="flex items-center gap-4 pt-2">
                        <div class="w-12 h-12 bg-[#FFF7F0] rounded-xl flex items-center justify-center text-[#E3C474]">
                            <i class="bi bi-egg-fried text-xl"></i>
                        </div>
                        <p class="text-lg font-bold text-[#4A3728]">{{ $transaction->menu->nama }}</p>
                    </div>
                </div>

                <!-- Info Jumlah -->
                <div class="space-y-1">
                    <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Kuantitas</h4>
                    <div class="flex items-center gap-4 pt-2">
                        <div class="w-12 h-12 bg-[#FFF7F0] rounded-xl flex items-center justify-center text-[#E3C474]">
                            <i class="bi bi-box-seam text-xl"></i>
                        </div>
                        <p class="text-lg font-bold text-[#4A3728]">{{ $transaction->jumlah }} Porsi / Item</p>
                    </div>
                </div>

                <!-- Info Metode -->
                <div class="space-y-1">
                    <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Metode Transaksi</h4>
                    <div class="flex items-center gap-4 pt-2">
                        <div class="w-12 h-12 bg-[#FFF7F0] rounded-xl flex items-center justify-center text-[#E3C474]">
                            <i class="bi bi-credit-card text-xl"></i>
                        </div>
                        <p class="text-lg font-bold text-[#4A3728]">{{ ucfirst($transaction->metode_transaksi) }}</p>
                    </div>
                </div>

                <!-- Info Tanggal -->
                <div class="space-y-1">
                    <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Waktu Transaksi</h4>
                    <div class="flex items-center gap-4 pt-2">
                        <div class="w-12 h-12 bg-[#FFF7F0] rounded-xl flex items-center justify-center text-[#E3C474]">
                            <i class="bi bi-calendar-check text-xl"></i>
                        </div>
                        <p class="text-lg font-bold text-[#4A3728]">{{ $transaction->created_at->format('d M Y, H:i') }} WIB</p>
                    </div>
                </div>

                <!-- Info Deskripsi -->
                <div class="md:col-span-2 space-y-1 pt-4">
                    <h4 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Catatan Tambahan</h4>
                    <div class="p-6 bg-gray-50 rounded-[2rem] border border-gray-100 italic text-gray-500 font-light leading-relaxed">
                        "{{ $transaction->deskripsi ?? 'Tidak ada catatan tambahan untuk transaksi ini.' }}"
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-16 pt-8 border-t border-gray-100 flex flex-wrap gap-4">
                <a href="{{ route('admin.transaction.edit', $transaction) }}"
                   class="flex-1 inline-flex items-center justify-center gap-2 px-8 py-4 bg-[#4A3728] text-white rounded-2xl font-bold text-xs uppercase tracking-widest shadow-lg shadow-gray-200 hover:bg-[#E3C474] transition-all transform hover:-translate-y-1">
                    <i class="bi bi-pencil-square"></i> Edit Data
                </a>

                <form action="{{ route('admin.transaction.destroy', $transaction) }}" 
                      method="POST"
                      class="flex-1"
                      onsubmit="return confirm('Hapus catatan transaksi ini secara permanen?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="w-full inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-red-500 border border-red-100 rounded-2xl font-bold text-xs uppercase tracking-widest hover:bg-red-50 transition-all">
                        <i class="bi bi-trash3"></i> Hapus Transaksi
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Insight -->
    <div class="mt-8 text-center">
        <p class="text-[10px] font-bold text-gray-300 uppercase tracking-[0.3em]">
            Dapur Mami Ersa Admin System • Generated at {{ now()->format('Y') }}
        </p>
    </div>
</div>

<style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #FAFAFA; }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeIn 0.5s ease-out forwards;
    }
</style>
@endsection
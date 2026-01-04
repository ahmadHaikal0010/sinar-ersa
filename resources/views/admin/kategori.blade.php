@extends('layout.app')

@section('content')

<div class="max-w-7xl mx-auto px-2">
    
    <!-- Top Bar: Navigation & Title -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">
        <div>
            <nav class="flex mb-2 text-gray-400 text-[10px] font-black uppercase tracking-[0.2em]">
                <ol class="inline-flex items-center space-x-2">
                    <li>Admin</li>
                    <li><i class="bi bi-chevron-right text-[8px]"></i></li>
                    <li class="text-[#B98B58]">Kelola Kategori</li>
                </ol>
            </nav>
            <h1 class="text-3xl font-black text-[#4A3728]">Kategori Menu</h1>
            <p class="text-gray-400 text-sm font-medium">Atur pengelompokan menu masakan dan oleh-oleh Anda.</p>
        </div>

        <a href="#" 
           class="inline-flex items-center gap-2 px-6 py-3 bg-[#4A3728] text-white rounded-2xl font-bold text-xs uppercase tracking-widest shadow-xl shadow-gray-200 hover:bg-[#E3C474] transition-all transform hover:-translate-y-1">
            <i class="bi bi-folder-plus text-lg"></i> Tambah Kategori
        </a>
    </div>

    <!-- Main Card Container -->
    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/50 border-b border-gray-100">
                        <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Nama Kategori</th>
                        <th class="px-6 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Populasi Menu</th>
                        <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] text-center">Tindakan</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-50">
                    {{-- Baris Contoh 1 --}}
                    <tr class="hover:bg-[#FFFBF5]/50 transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-[#FFF7F0] rounded-xl flex items-center justify-center text-[#E3C474]">
                                    <i class="bi bi-tag-fill"></i>
                                </div>
                                <span class="font-bold text-[#4A3728]">Oleh-oleh</span>
                            </div>
                        </td>
                        <td class="px-6 py-6">
                            <span class="inline-flex items-center px-4 py-1.5 bg-gray-100 text-gray-500 rounded-full text-xs font-bold">
                                <i class="bi bi-egg-fried me-2"></i> 10 Menu
                            </span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex justify-center items-center gap-2">
                                <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-gray-400 hover:bg-[#E3C474] hover:text-white transition-all shadow-sm" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-red-300 hover:bg-red-500 hover:text-white transition-all shadow-sm" title="Hapus">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    {{-- Baris Contoh 2 --}}
                    <tr class="hover:bg-[#FFFBF5]/50 transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 bg-[#FFF7F0] rounded-xl flex items-center justify-center text-[#E3C474]">
                                    <i class="bi bi-cup-hot-fill"></i>
                                </div>
                                <span class="font-bold text-[#4A3728]">Sarapan Pagi</span>
                            </div>
                        </td>
                        <td class="px-6 py-6">
                            <span class="inline-flex items-center px-4 py-1.5 bg-gray-100 text-gray-500 rounded-full text-xs font-bold">
                                <i class="bi bi-egg-fried me-2"></i> 05 Menu
                            </span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex justify-center items-center gap-2">
                                <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-gray-400 hover:bg-[#E3C474] hover:text-white transition-all shadow-sm" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-50 text-red-300 hover:bg-red-500 hover:text-white transition-all shadow-sm" title="Hapus">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Footer Card (Informasi) -->
        <div class="p-6 bg-gray-50/50 border-t border-gray-100">
            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest flex items-center gap-2">
                <i class="bi bi-info-circle-fill text-[#E3C474]"></i>
                Tips: Kategori yang memiliki menu tidak disarankan untuk dihapus langsung.
            </p>
        </div>
    </div>
</div>

<style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #FAFAFA; }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .max-w-7xl {
        animation: fadeInUp 0.6s ease-out forwards;
    }
</style>
@endsection
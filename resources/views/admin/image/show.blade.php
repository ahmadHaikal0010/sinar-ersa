@extends('layouts.app')

@section('content')
    <!-- Google Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <div class="max-w-7xl mx-auto">

        <!-- Notifikasi Sukses -->
        @if (session('success'))
            <div
                class="mb-6 flex items-center gap-3 p-4 bg-green-50 border border-green-100 text-green-700 rounded-2xl animate-fade-in shadow-sm">
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

        <!-- Detail Foto -->
        <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden p-8">
            <div class="flex flex-col md:flex-row items-start gap-8">
                <div class="w-full md:w-1/2">
                    <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                        <img src="{{ $image->url }}" alt="{{ $image->menu?->nama ?? 'Menu Image' }}"
                            class="w-full h-auto object-cover">
                    </div>
                </div>

                <div class="w-full md:w-1/2">
                    <h2 class="text-2xl font-extrabold text-[#4A3728] mb-2">Detail Foto</h2>
                    <p class="text-sm text-gray-500 mb-4">Informasi dan relasi untuk aset visual ini.</p>

                    <div class="mb-4">
                        <h3 class="text-sm text-gray-400">Relasi Menu</h3>
                        @if ($image->menu)
                            <p class="font-bold text-[#4A3728]">{{ $image->menu->nama }}</p>
                            <p class="text-xs text-gray-400">{{ $image->menu->kategori }}</p>
                        @else
                            <p class="italic text-gray-300">Tanpa Relasi Menu</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <h3 class="text-sm text-gray-400">Tanggal Ditambahkan</h3>
                        <p class="text-sm text-gray-600">{{ $image->created_at->format('d M Y H:i') }}</p>
                    </div>

                    <div class="flex items-center gap-3 mt-6">
                        <a href="{{ route('admin.image.index') }}"
                            class="px-5 py-3 bg-[#E3C474] text-white rounded-xl">Kembali</a>
                        <a href="{{ route('admin.image.edit', $image) }}"
                            class="px-5 py-3 border border-gray-200 rounded-xl">Edit Foto</a>

                        <form action="{{ route('admin.image.destroy', $image) }}" method="POST"
                            onsubmit="return confirm('Hapus foto ini dari galeri?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-3 bg-red-500 text-white rounded-xl">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FAFAFA;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.4s ease-out forwards;
        }

        /* Kustomisasi Pagination Laravel agar senada */
        .pagination {
            display: flex;
            gap: 0.5rem;
        }

        .page-item.active .page-link {
            background-color: #E3C474 !important;
            border-color: #E3C474 !important;
        }

        .page-link {
            border-radius: 0.75rem !important;
            color: #4A3728 !important;
        }
    </style>
@endsection

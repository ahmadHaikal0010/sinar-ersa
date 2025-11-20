@extends('layouts.landing-layout')

@section('content')
<style>
    /* * Memastikan konsistensi styling dari halaman 'Tentang Kami'.
     * Dalam proyek nyata, ini harus di file CSS utama.
     */

    /* Header Bar Kuning Kecoklatan (Opsional, jika Anda ingin bar di atas) */
    .header-bg {
        background-color: #EACF91; /* Perkiraan warna dari gambar 'Tentang Kami' */
        height: 10px; 
        width: 100%;
    }

    /* Font Judul "Kontak Kami" yang menyerupai tulisan tangan */
    .handwritten-font {
        font-family: 'Dancing Script', cursive; /* Gunakan font yang sama dengan judul sebelumnya */
        font-size: 3rem; 
        font-weight: 400; 
    }

    /* Styling untuk teks kontak */
    .contact-label {
        font-weight: bold;
        display: inline-flex; /* Membantu penempatan ikon */
        align-items: center;
        margin-bottom: 0.25rem; /* Jarak kecil antar label */
    }

    /* Styling untuk ikon agar ada sedikit jarak */
    .contact-icon {
        margin-right: 0.5rem;
    }
</style>


<section class="container mx-auto px-6 py-12 max-w-4xl">
    
    <div class="text-center">
        <h1 class="handwritten-font mb-12 text-5xl">Kontak Kami</h1> 
    </div>

    <div class="text-gray-700 text-lg md:text-xl">
        
        <div class="mb-6">
            <p class="contact-label text-base">
                <span class="contact-icon">📍</span> Alamat
            </p>
            <p class="pl-7">
                Jl. Nusantara No. 123, Jakarta Pusat, Indonesia
            </p>
        </div>
        
        <div class="mb-6">
            <p class="contact-label text-base">
                <span class="contact-icon">📱</span> Telepon / WhatsApp
            </p>
            <p class="pl-7">
                +62 812 3456 7890
            </p>
        </div>

        <div>
            <p class="contact-label text-base">
                <span class="contact-icon">🕒</span> Jam Operasional
            </p>
            <p class="pl-7">
                Senin - Sabtu: 08.00 - 20.00 WIB
            </p>
            <p class="pl-7">
                Minggu: 09.00 - 17.00 WIB
            </p>
        </div>

    </div>

</section>
@endsection
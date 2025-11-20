@extends('layouts.landing-layout')

@section('content')
<style>
    /* * Bagian ini berisi custom CSS untuk meniru tampilan gambar.
     * Dalam proyek Laravel, idealnya ini berada di file CSS eksternal.
     */

    /* Header Bar Kuning Kecoklatan di Paling Atas */
    .header-bg {
        background-color: #EACF91; /* Perkiraan warna dari gambar */
        height: 10px; /* Tinggi bar di atas */
        width: 100%;
    }

    /* Font Judul "Tentang Kami" yang menyerupai tulisan tangan */
    .handwritten-font {
        /* Ganti 'Dancing Script' dengan font yang Anda gunakan di project. 
         * 'cursive' adalah fallback.
         */
        font-family: 'Dancing Script', cursive; 
        font-size: 3rem; 
        font-weight: 400; 
    }

    /* Font Teks Badan agar terlihat lebih elegan dan mudah dibaca */
    .body-text {
        font-family: 'Georgia', serif; /* Contoh font elegan */
        font-size: 1.125rem; /* Ukuran teks sedikit lebih besar */
        line-height: 1.75; /* Spasi baris yang longgar */
    }
</style>



<section class="container mx-auto px-6 py-12 max-w-4xl text-center">
    
    <h1 class="handwritten-font mb-12 text-5xl">Tentang Kami</h1> 
    
    <div class="text-gray-700 body-text">
        <p class="mb-8">
            Dapur Mami Ersa adalah **toko online** yang menyediakan berbagai macam **makanan khas nusantara berkualitas tinggi**. Kami menghadirkan cita rasa **tradisional yang autentik** dengan **bahan-bahan pilihan** dan **resep turun-temurun**.
        </p>
        <p class="max-w-3xl mx-auto mb-8"> 
            Dengan dua kategori utama - **Oleh-Oleh dan Sarapan Pagi** - kami berkomitmen untuk menghadirkan produk terbaik yang cocok untuk berbagai kebutuhan Anda. 
        </p>
        <p class="max-w-3xl mx-auto">
            Pesan mudah lewat **WhatsApp**, kami siap melayani Anda dengan **cepat dan ramah**!
        </p>
    </div>

</section>
@endsection
@extends('layouts.layout')
@section('title', 'Tentang Kami')
@section('content')

<div class="relative overflow-hidden bg-[#faf8f5] py-20 border-b border-[#ebdcb9]/30">
    <div class="max-w-7xl mx-auto px-6">
        
             <!-- Grid Layout: kiri teks, kanan gambar -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Kiri: Teks -->

            <div class="space-y-6 text-left">
                <!-- Judul -->
                <h1 class="text-4xl md:text-5xl font-extrabold text-[#17433F] leading-tight">
                Cerita Kami
                </h1>
                

                <div class="space-y-4 text-neutral-600 text-lg leading-relaxed">
                    <p>
                        Berawal dari kecintaan terhadap kopi dan inovasi, Byte & Brew Coffee & Eatery hadir sebagai tempat berkumpul yang mengutamakan kualitas, kenyamanan, dan pengalaman pelanggan. Setiap sajian dibuat menggunakan bahan pilihan untuk menghadirkan cita rasa terbaik.
                    </p>
                    <p>
                      Tidak hanya menjadi tempat menikmati kopi, Byte & Brew juga menjadi ruang bagi mahasiswa, pekerja, dan masyarakat untuk belajar, berdiskusi, maupun mengembangkan ide-ide kreatif dalam suasana yang hangat dan modern. 
                    </p>
                </div>
            </div>
               <!-- Kanan : Gambar -->
            <div class="flex justify-center">
                <img src="{{ asset('assets/images/about.jpg') }}" 
                     alt="Suasana Cafe Byte & Brew" 
                     class="w-full max-w-md h-[350px] object-cover rounded-3xl shadow-md">
            </div>

        </div>

    </div>
</div>
@endsection
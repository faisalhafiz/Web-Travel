@extends('layouts.master-guest')

@section('title', 'Paket Wisata Bandung')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">

@endsection

@section('bdg')

<body>
    <div class="mt-3">
        <h1>Paket Wisata Bandung</h1>
    </div>
    <div class="mt-4 background">
        <div class="trans">
            <div class="container mt-2">
                <h4 style="color: white">Daftar Tarif Harga Paket Tour Wisata Bandung</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @include('guest.share')
    </div>
    <div class="mt-3">
        <img class="center" src="/images/bdg.jpg" width="900" height="500">
    </div>
    <h5 class="mt-4" style="text-align: center">
        Paket Wisata Bandung by Melia Transport
    </h5>
    <p style="color: white" class="mt-5">
        Bandung adalah kota metropolitan terbesar di Provinsi Jawa Barat, sekaligus menjadi ibu kota provinsi tersebut.
        Kota ini
        terletak 140 km sebelah tenggara Jakarta, dan merupakan kota terbesar di wilayah Pulau Jawa bagian selatan.
        Sedangkan wilayah Bandung Raya (Wilayah Metropolitan Bandung) merupakan metropolitan terbesar ketiga di
        Indonesia setelah Jabodetabek dan Gerbangkertosusila.
    </p>
    <p style="color: white" class="mt-3">
        Di kota ini tercatat berbagai sejarah penting, di antaranya sebagai tempat berdirinya sebuah perguruan tinggi
        teknik pertama di Indonesia (Technische Hoogeschool te Bandoeng - TH Bandung, sekarang Institut Teknologi
        Bandung - ITB), lokasi ajang pertempuran pada masa kemerdekaan, serta pernah menjadi tempat berlangsungnya
        Konferensi Asia-Afrika 1955, suatu pertemuan yang menyuarakan semangat anti kolonialisme, bahkan Perdana
        Menteri India Jawaharlal Nehru dalam pidatonya mengatakan bahwa Bandung adalah ibu kotanya Asia-Afrika.
    </p>
    <div class="row">
        <div class="mt-4 bek">
            <div class="container">
                <div class="container mt-2">
                    <h4 style="color: white">Daftar Tarif Harga Paket Tour Wisata Bandung</h4>
                </div>
            </div>
        </div>
    </div>
    <p style="color: white" class="mt-4">
        Anda bisa melakukan perjalanan wisata maupun tour di Bandung dengan cara mudah tanpa harus tersesat karena
        tidak mengetahui arah tujuan spot wisata terbaik yang ada di Bandung, karena bisa dikatakan obyek tempat
        wisata di Bandung sangat banyak, dengan pilihan menggunakan jasa agen tour Bandung bisa menjadi solusi terbaik untuk menetukan paket wisata
        sehingga perjalanan jauh lebih mudah anda tinggal memilih jenis paket tour yang anda maupun peserta kehendaki
        khususnya di wilayah kota Bandung dan sekitarnya.
    </p>
    <div class="mt-5">
        <img class="center" src="/images/bdg2.jpg" width="950" height="600">
    </div>
    </div>
    @include('guest.footer')
</body>

@endsection
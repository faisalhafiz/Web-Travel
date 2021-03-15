@extends('layouts/master-guest')

@section('title', 'Home')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">

@endsection

@section('home')

<body>
    <div class="marquee">
        <h1 class="mt-3">Selamat Datang di Web Melia Transport</h1>
    </div>
    <div class="mt-4">
        <div class="container">
            <div class="row">
                <div class="card card1" style="width: 65rem">
                    <img class="card-img" src="/images/orange.png" alt="#">
                    <h2 class="mt-2">Tailored Jeans</h2>
                    <p>Isi Sebuah Artikel secara singkat sampe
                        pembacanya kepo mau ngeklik.</p>
                    <button>Lihat Selengkapnya</button>
                </div>
            </div>
            <div class="row">
                <div class="card card2 mt-4" style="width: 30rem">
                    <img class="card-img" src="/images/orange.png" alt="#">
                    <h2 class="mt-2">Tailored Jeans</h2>
                    <p>Isi Sebuah Artikel secara singkat sampe
                        pembacanya kepo mau ngeklik.</p>
                    <button>Lihat Selengkapnya</button>
                </div>
                <div class="card card2 mt-4" style="width: 30rem">
                    <img class="card-img" src="/images/orange.png" alt="#">
                    <h2 class="mt-2">Tailored Jeans</h2>
                    <p>Isi Sebuah Artikel secara singkat sampe
                        pembacanya kepo mau ngeklik.</p>
                    <button>Lihat Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>
    </div>
        <div class="trans mt-5">
            <div class="container-md">
                <img src="/images/melialogo.jpg" width="130" height="50" alt="">
                <p class="mt-3">Kontak Kami</p>
                <p>Facebook  : Deddy Bear</p>
                <p>Instagram : Info Fact</p>
                <p>Whatsapp  : 081270280225</p>
                <p>Alamat    : Jl. Ploso 9 No.4 Tambaksari Surabaya</p>
            </div>
        </div>
    <div class="text-center p-3" style="background-color: #dddddd;">
        © 2021 Copyright:
        <a class="text-dark" href="https://facebook.com">meliatrasport.com</a>
    </div>
</body>

@endsection
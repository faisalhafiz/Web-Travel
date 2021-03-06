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
                <div class="card card1" style="width: 30rem">
                    <img class="card-img" src="/images/orange.png" alt="#">
                    <h2 class="mt-2">Tailored Jeans</h2>
                    <p>Isi Sebuah Artikel secara singkat sampe
                        pembacanya kepo mau ngeklik.</p>
                    <button>Lihat Selengkapnya</button>
                </div>
                <div class="card card2" style="width: 30rem">
                    <img class="card-img" src="/images/orange.png" alt="#">
                    <h2 class="mt-2">Tailored Jeans</h2>
                    <p>Isi Sebuah Artikel secara singkat sampe
                        pembacanya kepo mau ngeklik.</p>
                    <button>Lihat Selengkapnya</button>
                </div>
                <div class="card card2 mt-5" style="width: 30rem">
                    <img class="card-img" src="/images/orange.png" alt="#">
                    <h2 class="mt-2">Tailored Jeans</h2>
                    <p>Isi Sebuah Artikel secara singkat sampe
                        pembacanya kepo mau ngeklik.</p>
                    <button>Lihat Selengkapnya</button>
                </div>
                <div class="card card2 mt-5" style="width: 30rem">
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
    <div class="container mt-2 background">
        <div class="trans">
            <div class="container-md">
                <h3>Kontak Kami</h3>
                <p>Facebook : Deddy Bear</p>
                <p>Instagram : Info Fact</p>
                <p>Whatsapp : 081270280225</p>
                <p>Alamat : Jl. Ploso 9 No.4 Tambaksari Surabaya</p>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: #dddddd;">
        © 2020 Copyright:
        <a class="text-dark" href="https://Youtube.com">Youtube.com</a>
    </div>
</body>

@endsection
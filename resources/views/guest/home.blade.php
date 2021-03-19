@extends('layouts.master-guest')

@section('title', 'Home')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">

@endsection

@section('home')

<body>
    <div class="marquee">
        <h1 class="mt-3">Selamat Datang di Web Melia Transport</h1>
    </div>
    <div class="mt-4 background">
        <div class="trans">
            <div class="container mt-2">
                <h4 style="color: white">Laman Berita Home</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
    @include('guest.share')
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
    @include('guest.footer')
</body>

@endsection
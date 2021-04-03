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
        <div class="trans" style="border-radius: 15px">
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
                    <img class="card-img" src="/images/vrz.jpg" alt="#">
                    <h2 class="mt-2">Daftar Penyewaan Mobil Melia Travel</h2>
                    <p>Informasi Seputar Penyewaan Mobil</p>
                    <button>Lihat Selengkapnya</button>
                </div>
            </div>
            <div class="row">
                <div class="card card2 mt-4" style="width: 30rem">
                    <img class="card-img" src="/images/bwi.jpg" alt="#" style="height: 320px">
                    <h2 class="mt-2">Paket Wisata Banyuwangi by Melia Travel</h2>
                    <p>Informasi Seputar Paket Wisata Banyuwangi</p>
                    <button>Lihat Selengkapnya</button>
                </div>
                <div class="card card2 mt-4" style="width: 30rem">
                    <img class="card-img" src="/images/testimelia.jpg" alt="#" style="height: 320px">
                    <h2 class="mt-2">Profil Melia Travel</h2>
                    <p>Informasi Seputar Profil Melia Travel</p>
                    <button>Lihat Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('guest.footer')
</body>

@endsection
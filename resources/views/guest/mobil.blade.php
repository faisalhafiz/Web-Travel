@extends('layouts.master-guest')

@section('title', 'Persewaan Mobil')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">

@endsection

@section('mobil')

<body>
    <div class="mt-3">
        <h1>Sewa Mobil</h1>
    </div>
    <div class="mt-4 background">
        <div class="trans">
            <div class="container mt-2">
                <h4 style="color: white">Daftar Mobil dan Biaya Sewa Melia Transport</h4>
            </div>
        </div>
    </div>
    <div class="card-deck">
        <div class="card trans mt-3" style="width: 20rem">
            <img class="card-img-top gmbr" src="/images/hiace.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">Toyota Hiace</h5>
                <p class="card-text" style="text-align: center">Harga sewa rata-rata : Rp 250.000,00 perhari</p>
            </div>
        </div>
        <div class="card trans mt-3" style="width: 20rem">
            <img class="card-img-top gmbr" src="/images/innova.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">Toyota Innova</h5>
                <p class="card-text" style="text-align: center">Harga sewa rata-rata : Rp 200.000,00 perhari</p>
            </div>
        </div>
    </div>
    <div class="card-deck">
        <div class="card trans mt-3" style="width: 20rem">
            <img class="card-img-top gmbr" src="/images/alphard.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">Toyota Alphad</h5>
                <p class="card-text" style="text-align: center">Harga sewa rata-rata : Rp 300.000,00 perhari</p>
            </div>
        </div>
        <div class="card trans mt-3" style="width: 20rem">
            <img class="card-img-top gmbr" src="/images/fortuner.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">Toyota Fortuner</h5>
                <p class="card-text" style="text-align: center">Harga sewa rata-rata : Rp 300.000,00 perhari</p>
            </div>
        </div>
    </div>
    <div class="card trans mt-3" style="width: 49%">
        <img class="card-img-top" src="/images/vrz.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title" style="text-align: center">Toyota VRZ</h5>
            <p class="card-text" style="text-align: center">Harga sewa rata-rata : Rp 300.000,00 perhari</p>
        </div>
    </div>
    <div class="mt-4 background">
        <div class="trans">
            <div class="container mt-2" style="text-align: center">
                <h5 style="color: white">*Catatan : Harga sewaktu-waktu dapat berubah, harap hubungi admin Melia untuk
                    info lengkapnya.</h5>
            </div>
        </div>
    </div>
    </div>
    <div class="trans mt-5">
        <div class="container-md">
            <img src="/images/melialogo.jpg" width="130" height="50" alt="">
            <p class="mt-3">Kontak Kami</p>
            <p>Facebook : Deddy Bear</p>
            <p>Instagram : Info Fact</p>
            <p>Whatsapp : 081270280225</p>
            <p>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Jl. Ploso 9 No.4 Tambaksari Surabaya</p>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: #dddddd;">
        © 2021 Copyright:
        <a class="text-dark" href="https://facebook.com">meliatrasport.com</a>
    </div>
</body>

@endsection
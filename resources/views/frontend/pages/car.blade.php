@extends('layouts.master-guest')

@section('title', 'Persewaan Mobil')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">

@endsection

@section('mobil')

<body>
    <div class="mt-4 background" style="align-content: center">
        <div class="trans" style="border-radius: 15px">
            <div class="container mt-2">
                <h4 style="color: white">Daftar Mobil dan Tarif Sewa</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @include('guest.share')
    </div>
    <div class="card-deck">
        <div class="card trans mt-3" style="width: 20rem; border-radius: 15px">
            <img class="card-img-top gmbr" src="/images/hiace.jpg" alt="Card image cap" style="border-radius: 15px">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">Toyota Hiace</h5>
                <p class="card-text" style="text-align: center">Harga sewa rata-rata : Rp 250.000,00 perhari</p>
            </div>
        </div>
        <div class="card trans mt-3" style="width: 20rem; border-radius: 15px">
            <img class="card-img-top gmbr" src="/images/innova.jpeg" alt="Card image cap" style="border-radius: 15px">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">Toyota Innova</h5>
                <p class="card-text" style="text-align: center">Harga sewa rata-rata : Rp 200.000,00 perhari</p>
            </div>
        </div>
    </div>
    <div class="card-deck">
        <div class="card trans mt-3" style="width: 20rem; border-radius: 15px">
            <img class="card-img-top gmbr" src="/images/alphard.jpg" alt="Card image cap" style="border-radius: 15px">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">Toyota Alphad</h5>
                <p class="card-text" style="text-align: center">Harga sewa rata-rata : Rp 300.000,00 perhari</p>
            </div>
        </div>
        <div class="card trans mt-3" style="width: 20rem; border-radius: 15px">
            <img class="card-img-top gmbr" src="/images/fortuner.jpg" alt="Card image cap" style="border-radius: 15px">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">Toyota Fortuner</h5>
                <p class="card-text" style="text-align: center">Harga sewa rata-rata : Rp 300.000,00 perhari</p>
            </div>
        </div>
    </div>
    <div class="card-deck">
        <div class="card trans mt-3" style="width: 20rem; border-radius: 15px">
            <img class="card-img-top gmbr" src="/images/vrz.jpg" alt="Card image cap" style="border-radius: 15px">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">Toyota VRZ</h5>
                <p class="card-text" style="text-align: center">Harga sewa rata-rata : Rp 300.000,00 perhari</p>
            </div>
        </div>
        <div class="card trans mt-3" style="width: 20rem; border-radius: 15px">
            <img class="card-img-top gmbr" src="/images/vrz.jpg" alt="Card image cap" style="border-radius: 15px">
            <div class="card-body">
                <h5 class="card-title" style="text-align: center">Toyota VRZ</h5>
                <p class="card-text" style="text-align: center">Harga sewa rata-rata : Rp 300.000,00 perhari</p>
            </div>
        </div>
    </div>
    <div class="mt-4 background">
        <div class="trans" style="border-radius: 15px">
            <div class="container mt-2" style="text-align: center">
                <h5 style="color: white">*Catatan : Harga sewaktu-waktu dapat berubah, harap hubungi admin Melia untuk
                    info lengkapnya.</h5>
            </div>
        </div>
    </div>
    </div>
    @include('guest.footer')
</body>

@endsection
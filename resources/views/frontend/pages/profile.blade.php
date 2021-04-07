@extends('frontend.layouts.default')

@section('title', 'Profil Melia')

@section('css')
    <link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">
@endsection

@section('content')
    <div class="mt-4 background">
        <div class="trans" style="border-radius: 15px">
            <div class="container mt-2">
                <h4 style="color: white">Profil Lengkap Melia Transport</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @include('frontend.layouts.components.share')
    </div>
    <div>
        <h3 class="mt-3" style="text-align: center">CV. Melia Sarana Global Mandiri</h3>
    </div>
    <div class="row">
        <div class="col-6 mt-4">
            <img src="/images/advmelia.jpg" width="550" height="300">
        </div>
        <div class="col-6 mt-4">
            <p style="color: white">CV. Melia Sarana Global Mandiri adalah CV yang bergerak
                di bidang Travel, Rental Mobil, dan Event Organizer.
                Kami memiliki berbagai layanan jasa yang berupa: Sewa Mobil Harian, Sewa Mobil Wedding, Tour Travel,
                Piknik Luar Kota.
                Kami beralamatkan di Jl. Karangan Jaya VIII, Babatan, Wiyung, Surabaya.
                Kami Berdiri sejak tahun 2000 dan sudah banyak menjadi agen travel yang cukup sukses.
                Motto kami adalah kepuasan pelanggan adalah sebuah prioritas dan kebangaan.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mt-5">
            <p style="color: white">
                CV. Melia Sarana Global Mandiri adalah CV yang bergerak
                di bidang Travel, Rental Mobil, dan Event Organizer.
                Kami memiliki berbagai layanan jasa yang berupa: Sewa Mobil Harian, Sewa Mobil Wedding, Tour Travel,
                Piknik Luar Kota.
                Kami beralamatkan di Jl. Karangan Jaya VIII, Babatan, Wiyung, Surabaya.
                Kami Berdiri sejak tahun 2000 dan sudah banyak menjadi agen travel yang cukup sukses.
                Motto kami adalah kepuasan pelanggan adalah sebuah prioritas dan kebangaan.
            </p>
        </div>
        <div class="col-6 mt-5">
            <img src="/images/testimelia.jpg" width="550" height="400">
        </div>
    </div>
    </div>
@endsection

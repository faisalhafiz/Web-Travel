@extends('frontend.layouts.default')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">
@endsection

@section('content')
    {{ $post }}
    <div class="marquee">
        <h1 class="mt-3">{{ __('Selamat Datang di Web Melia Transport') }}</h1>
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
            @include('frontend.pages.components.card', ['img' => 'vrz.jpg','title'=>'Daftar Penyewaan Mobil Melia
            Travel','desc'=>'Informasi Seputar Penyewaan Mobil','btn'=>'Lihat Selengkapnya'])
            <div class="row mt-4">
                <div class="col">
                    @include('frontend.pages.components.card', ['img' => 'bwi.jpg', 'title' => 'Paket Wisata Banyuwangi',
                    'desc' => 'Informasi Seputar Paket Wisata Banyuwangi', 'btn' => 'Lihat Selengkapnya'])
                </div>
                <div class="col">
                    @include('frontend.pages.components.card', ['img' => 'testimelia.jpg', 'title' => 'Profil Melia Sarana
                    Transport',
                    'desc' => 'Informasi Seputar Profil Melia Sarana Transport', 'btn' => 'Lihat Selengkapnya'])
                    {{-- <div class="card">
                        <img class=" card-img-top" src="/images/testimelia.jpg">
                        <div class="card-title mt-2 ml-2">
                            <h2 class="mt-2">Profil Melia Travel</h2>
                        </div>
                        <div class="card-text ml-2">
                            <p>Informasi Seputar Profil Melia Travel</p>
                        </div>
                        <a class="btn btn-dark" style="border-radius: 0 !important;">Lihat Selengkapnya</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

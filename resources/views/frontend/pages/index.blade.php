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
                @foreach ($post as $p)
                    <div class="col">
                        @include('frontend.pages.components.card', ['img' => 'bwi.jpg', 'title' => $p->title,
                        'desc' => $p->desc, 'btn' => 'Lihat Selengkapnya'])
                    </div>
                @endforeach
                {{-- <div class="col">
                    @include('frontend.pages.components.card', ['img' => 'bwi.jpg', 'title' => 'Paket Wisata Banyuwangi',
                    'desc' => 'Informasi Seputar Paket Wisata Banyuwangi', 'btn' => 'Lihat Selengkapnya'])
                </div>
                <div class="col">
                    @include('frontend.pages.components.card', ['img' => 'testimelia.jpg', 'title' => 'Profil Melia Sarana
                    Transport',
                    'desc' => 'Informasi Seputar Profil Melia Sarana Transport', 'btn' => 'Lihat Selengkapnya'])
                </div> --}}
            </div>
        </div>
    </div>
@endsection

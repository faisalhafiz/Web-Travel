@extends('frontend.layouts.default')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">
@endsection

@section('content')
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
        @include('frontend.layouts.components.share')
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
            </div>
        </div>
    </div>
@endsection

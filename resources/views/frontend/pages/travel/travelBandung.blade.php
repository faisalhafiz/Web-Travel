@extends('frontend\layouts\default')

@section('title', 'Paket Wisata Bandung')

@section('css')
    <link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">

@endsection

@section('bdg')

    <body>
        <div class="mt-4 background">
            <div class="trans" style="border-radius: 15px">
                <div class="container mt-2">
                    <h4 style="color: white">Daftar Tarif Harga Paket Tour Wisata Bandung</h4>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            @include('frontend\layouts\components\share')
        </div>
        <div class="mt-4">
            <div class="container">
                @if (count($post) > 0)
                    <div class="row mt-4">
                        @foreach ($post as $p)
                            <div class="col">
                                @include('frontend.pages.components.card', ['img' => $p->img, 'title' => $p->title,
                                'desc' => $p->desc, 'btn' => 'Lihat Selengkapnya'])
                            </div>
                        @endforeach
                    </div>
                @else
                    <h3 class="text-center">{{ __('Tidak Ada Artikel') }}</h3>
                @endif
            </div>
        </div>
    @endsection

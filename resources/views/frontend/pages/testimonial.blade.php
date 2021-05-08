@extends('frontend.layouts.default')

@section('title', 'Testimonial')

@section('css')
    <link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">
@endsection

@section('testimonial')
    <div class="mt-4 background">
        <div class="trans" style="border-radius: 15px">
            <div class="container mt-2">
                <h4 style="color: white">Testimonial Pelanggan Melia Travel</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @include('frontend.layouts.components.share')
    </div>
    <div class="container row mt-4 justify-content-center">
        <div class="trans" style="border-radius: 15px">
            <div class="card mr-5 ml-4">
                <div class="embed-responsive embed-responsive-16by9" style="width: 51rem; height: 30rem">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/02L4RVWrdM0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container row mt-5">
        <div class="card mr-5 ml-4" style="width: 30rem">
            <img class="card-img-top" src="/images/testimelia.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text" style="text-align: center">"Absolutely wonderful!"</p>
                <p class="card-text" style="text-align: center"> - Shurwood G.</p>
            </div>
        </div>
        <div class="card ml-5" style="width: 30rem">
            <img class="card-img-top" src="/images/testimelia.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text" style="text-align: center">"I was amazed at the quality of melia sarana transport.
                    It's incredible."</p>
                <p class="card-text" style="text-align: center"> - Barry Q.</p>
            </div>
        </div>
    </div>
    <div class="container row mt-5">
        <div class="card mr-5 ml-4" style="width: 30rem">
            <img class="card-img-top" src="/images/testimelia.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text" style="text-align: center">"Great job, I will definitely be ordering again! If you
                    want real marketing that works and effective implementation - melia sarana transport's got you
                    covered. Melia sarana transport was worth a fortune to my company. I use melia sarana transport
                    often."</p>
                <p class="card-text" style="text-align: center"> - Son R.</p>
            </div>
        </div>
        <div class="card ml-5" style="width: 30rem">
            <img class="card-img-top" src="/images/testimelia.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text" style="text-align: center">"Definitely worth the investment."</p>
                <p class="card-text" style="text-align: center"> - Matty J</p>
            </div>
        </div>
    </div>
@endsection

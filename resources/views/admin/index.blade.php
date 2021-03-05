@extends('layouts.master-admin')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Admin/homeAdmin/index.styles.css') }}">
@endsection

@section('title', 'Home')

@section('main')

<div>
    <div class="container-md">
    <body>
        <h1>Halaman Index Dashboard Admin</h1>
    </body>
    </div>
</div>
<div class="card" style="width: 18rem;">
    <div class="mx-auto">
    <img class="card-img-top" src="/images/orange.png" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
</div>
<div class="card" style="width: 18rem;">
    <div class="mx-auto">
    <img class="card-img-top" src="/images/orange.png" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
</div>
@endsection
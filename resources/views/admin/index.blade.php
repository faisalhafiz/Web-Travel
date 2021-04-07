@extends('layouts.master-admin')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.styles.css') }}">
@endsection
{{-- @section('title', 'Home')

@section('main') --}}

<body>
    <div>
        <div class="container-md text-center">

            <body>
                <h1>Halaman Index Dashboard Admin</h1>
            </body>
        </div>
    </div>
    <div>
        <div>
            <div class="mt-md-auto pad">

                <body>
                    <p>Daftar Riwayat Aktivitas Admin</p>
                </body>
            </div>
        </div>
    </div>
    <div class="row ml-auto">
        <div class="col-ml-3 mr-au tocard col-ml-3 mr-auto" style="width: 18rem;">
            <div class="mx-auto">
                <img class="card-img-top" src="/images/orange.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="card col-my-3 mr-auto" style="width: 18rem;">
            <div class="mx-auto">
                <img class="card-img-top" src="/images/orange.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="card col-my-3 mr-auto" style="width: 18rem;">
            <div class="mx-auto">
                <img class="card-img-top" src="/images/orange.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>



</body>
@endsection

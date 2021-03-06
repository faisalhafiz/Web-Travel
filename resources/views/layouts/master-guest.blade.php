<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('halaman/Guest/homeGuest/homeGuest.styles.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    @yield('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
            <img src="/images/melialogo.jpg" width="130" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/guest/profil">Profil Melia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/guest/mobil">Persewaan Mobil</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Paket Wisata
                    </a>
                    <div class="dropdown-menu slide" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/guest/wisatabandung">Paket Tour Wisata Bandung</a>
                        <a class="dropdown-item" href="/guest/wisatabanyuwangi">Paket Tour Wisata Banyuwangi</a>
                        <a class="dropdown-item" href="/guest/wisatajogja">Paket Tour Wisata Jogjakarta</a>
                        <a class="dropdown-item" href="/guest/wisatamalang">Paket Tour Wisata Malang</a>
                        <a class="dropdown-item" href="/guest/wisatapacitan">Paket Tour Wisata Pacitan</a>
                        <a class="dropdown-item" href="/guest/wisatasemarang">Paket Tour Wisata Semarang</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/guest/photo">Galeri Foto Melia</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Pencarian">
                <button class="btn btn-dark my-2 my-sm-0" type="submit">Pencarian</button>
            </form>
        </div>
    </nav>

    </div>
    <div class="container">
        @yield('home')
        @yield('profil')
        @yield('mobil')
        @yield('photo')
        @yield('bdg')
        @yield('bwi')
        @yield('jgj')
        @yield('mlg')
        @yield('pct')
        @yield('smg')
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
</script>
@yield('js')

</html>
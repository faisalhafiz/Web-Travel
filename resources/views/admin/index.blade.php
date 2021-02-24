@extends('layouts.master-admin')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Admin/homeAdmin/index.styles.css') }}">
@endsection

@section('title', 'Home')

@section('pilihan')

<body>
    <div class="container mt-auto">
        <a href="/add" class="btn btn-info btn-lg btn-block down" role="button" aria-pressed="true">Tambah Artikel</a>
        <a href="/show" class="btn btn-info btn-lg btn-block down" role="button" aria-pressed="true">Lihat Artikel</a>
        <a href="/photo" class="btn btn-info btn-lg btn-block down" role="button" aria-pressed="true">Galeri Foto</a>
    </div>
</body>

@endsection
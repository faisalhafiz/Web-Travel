@extends('layouts.master-admin')

@section('css')
<link rel="stylesheet" href="{{ asset('halaman/Admin/homeAdmin/index.styles.css') }}">
@endsection

@section('title', 'Home')

@section('main')
    <div class="container mt-auto">
        <a href="/photo" class="btn btn-secondary btn-lg btn-block down ukuran" role="button" aria-pressed="true">Galeri Foto</a>
    </div>
@endsection
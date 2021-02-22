@extends('layouts.master-admin')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Tambah Artikel')
 
<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    @if ($pesan = Session::get('Sukses'))
    <div class="alert alert-primary" role="alert">
        {{ $pesan }}
    </div>
    @endif
    @if ($pesan = Session::get('Gagal'))
    <div class="alert alert-danger" role="alert">
        {{ $pesan }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="/add_process">
    @csrf
        <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" class="form-control" name="title" placeholder="Judul artikel">
        </div>
        <div class="form-group">
            <label>Isi Artikel</label>
            <textarea class="form-control" name="desc" rows="15"></textarea>
        </div>
</div>
@endsection
 
<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
@section('sidebar')
<div class="col-md-5 ml-md-3 col-sm-12 bg-white p-1" style="height:120px !important">
    <div class="form-group">
        <button type="submit" class="btn btn-primary"> Upload </button>
    </div>
</div>
</form>
@endsection
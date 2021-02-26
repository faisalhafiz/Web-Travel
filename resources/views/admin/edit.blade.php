@extends('layouts.master-admin')

@section('Title', 'Edit Artikel')

@section('css')
    
@endsection

@section('js')
    
<script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
<script>
    $(document).ready(function(){
        CKEDITOR.replace('wildan-artikel' , {
            filebrowserUploadUrl: "{{route('post.gambar', ['_token' => csrf_token() ]) }}",
            filebrowserUploadMethod: 'form'
        });
    })
</script>
@endsection

@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    @if ($pesan = Session::get('Sukses'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ $pesan }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if ($pesan = Session::get('Gagal'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $pesan }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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

    <form method="post" action="/artikel/edit/{{ $id }}">
    @csrf
        <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" class="form-control" name="title" placeholder="Judul artikel">
        </div>
        <div class="form-group">
            <label>Isi Artikel</label>
            <textarea id="wildan-artikel" class="form-control" name="desc" rows="15"></textarea>
        </div>
        <div class="col-md-5 ml-md-3 col-sm-12 bg-white p-1" style="height:120px !important">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Edit Artikel</button>
                <a class="btn btn-secondary" href="/artikel/show">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection
@extends('layouts.master-admin')

@section('title', 'Tampilan Artikel')

@section('main')
<div class="card"> 
    <div class="card-header text-white bg-primary">
        List Data Artikel
    </div>
    <div class="card-body">
        <div class="text-right my-2">
            <a class="btn btn-success" href="/artikel/add">Tambah Data</a>
        </div>
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
        <div class="table-responsive col-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Artikel</th>
                        <th scope="col">Dibuat Pada</th>
                        <th scope="col">Diubah Pada</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bungkus as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <a href="/artikel/pilih/{{ $item->id }}" >Ubah</a>
                            <a href="/artikel/delete/{{ $item->id  }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
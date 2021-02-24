@extends('layouts.master-admin')

<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Tampilan Artikel')

<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
<div class="table-responsive">
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
            @foreach ($dadaMontok as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                    <a href="#">Ubah</a>
                    <a href="#">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
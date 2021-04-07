@extends('layouts.default')
@section('title', __('pages.title').__(' | Lihat Progress Laporan'))
@section('titleContent', __('Lihat Progress Laporan'))
@section('breadcrumb', __('Laporan'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Lihat Progress Laporan') }}</div>
@endsection

@section('content')
<h2 class="section-title">{{ __('Progress') }}</h2>
<p class="section-lead">
    {{ __('Detail Progress ').$reports->relationUser->name.__(' pada tanggal ').date("d-m-Y", strtotime($reports->tgl)) }}
</p>
<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">{{ __('#') }}</th>
                    <th scope="col">{{ __('Nama') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach(json_decode($reports->progress) as $number => $p)
                <tr>
                    <th scope="row">{{ $number + 1 }}</th>
                    <td>{{ $p }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="media mt-4">
            <div class="media-icon"><i class="fas fa-align-left"></i></div>
            <div class="media-body">
                <h6>{{ __('Keterangan') }}</h6>
                <p>{{ $reports->info }}</p>
            </div>
        </div>
    </div>
</div>
@if($reports->image != '0')
<h2 class="section-title">{{ __('Gambar Pendukung') }}</h2>
<div class="card">
    <div class="card-body">
        <div class="gallery" data-item-height="100">
            @foreach(json_decode($reports->image) as $i )
            <div class="gallery-item"
                data-image="{{ asset('storage')."/".date("d-m-Y", strtotime($reports->tgl))."/".$reports->relationUser->name."/".$i }}">
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
@isset($reports->files)
<h2 class="section-title">{{ __('File Pendukung') }}</h2>
<div class="card">
    <div class="card-body">
        @foreach(json_decode($reports->files) as $number => $f)
        <iframe width="100%" height="500px"
            src="https://docs.google.com/gview?url={{ asset('storage')."/".date("d-m-Y", strtotime($reports->tgl))."/".$reports->relationUser->name."/doc/".$f }}&embedded=true">
        </iframe>
        @endforeach
    </div>
</div>
@endisset
@if (Auth::user()->roles != 1 and $reports->acc == 'Pending')
<div class="row">
    <div class="col">
        <button onclick="accept({{ $reports->id }},'{{ $reports->relationUser->name }}')"
            class="btn btn-success btn-action btn-block">
            <i class="fas fa-check"></i> {{ __('Terima Laporan') }}
        </button>
    </div>
    <div class="col">
        <button onclick="decline({{ $reports->id }},'{{ $reports->relationUser->name }}')"
            class="btn btn-danger btn-action btn-block ">
            <i class="fas fa-trash"></i> {{ __('Tolak Laporan') }}
        </button>
    </div>
</div>
@endif
@endsection
@section('script')
<script src="{{ asset('pages/report/indexReport.js') }}"></script>
@endsection
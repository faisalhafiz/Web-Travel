@extends('layouts.default')
@section('title', __('pages.title').__(' | Dashboard'))
@section('titleContent', __('Dashboard'))
@section('breadcrumb', __('Tanggal ').date('d-M-Y'))

@section('content')
@if(Session::has('status'))
<div class="alert alert-primary alert-has-icon">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <div class="alert-title">{{ __('Informasi') }}</div>
        {{ Session::get('status') }}
    </div>
</div>
@endif
<div class="card card-hero">
    <div class="card-header">
        <div class="card-icon">
            <i class="fas fa-history"></i>
        </div>
        <h4>{{ __('History') }}</h4>
        <div class="card-description">{{ __('Riwayat yang kamu lakukan sebagai ').$nameRoles }}</div>
    </div>
    <div class="card-body p-0">
        <div class="tickets-list">
            @foreach($history as $s )
            <a href="javascript:void(0)" class="ticket-item">
                <div class="ticket-title">
                    <h4>{{ $s->info }}</h4>
                </div>
                <div class="ticket-info">
                    <div>{{ $s->relationUser->name }}</div>
                    <div class="bullet"></div>
                    <div class="text-primary">
                        {{ __('Tercatat pada tanggal ').date("d-M-Y", strtotime($s->date)) }}
                    </div>
                </div>
            </a>
            @endforeach
            <a href="{{ route('history.index') }}" class="ticket-item ticket-more">
                {{ __('Lihat Semua ') }} <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <button href="javascript:void(0)" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-print"></i> {{ __('Cetak Laporan Harian per Bulan') }}
        </button>
    </div>
    <div class="col">
        <button href="javascript:void(0)" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-print"></i> {{ __('Cetak Laporan Bulanan') }}
        </button>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('pages/home.js') }}"></script>
@endsection
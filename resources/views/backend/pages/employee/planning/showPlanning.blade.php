@extends('layouts.default')
@section('title', __('pages.title').__(' | Lihat Perencanaan'))
@section('titleContent', __('Lihat Perencanaan'))
@section('breadcrumb', __('Karyawan'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Perencanaan') }}</div>
<div class="breadcrumb-item active">{{ __('Lihat Perencanaan') }}</div>
@endsection

@section('content')
<h2 class="section-title">{{ __('Perencanaan ').$planning->relationUser->name }}</h2>
<p class="section-lead">
    {{ __('Pada tanggal ').date("d-m-Y", strtotime($planning->date)) }}
</p>
<div class="card">
    <div class="card-body">
        <p>
            {{ $planning->planning }}
        </p>
    </div>
</div>
@endsection
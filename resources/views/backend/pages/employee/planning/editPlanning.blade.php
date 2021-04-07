@extends('layouts.default')
@section('title', __('pages.title').__(' | Tambah Perencanaan'))
@section('titleContent', __('Tambah Perencanaan'))
@section('breadcrumb', __('Karyawan'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Perencanaan') }}</div>
<div class="breadcrumb-item active">{{ __('Tambah Perencanaan') }}</div>
@endsection

@section('content')
<h2 class="section-title">{{ __('Perencanaan ').$planning->relationUser->name }}</h2>
<p class="section-lead">
    {{ __('Pada tanggal ').date("d-m-Y", strtotime($planning->tgl)) }}
</p>
<form method="POST" action="{{ route('plan.update',$planning->id) }}">
    @method('PATCH')
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Tanggal') }}<code>*</code></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="far fa-calendar"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control datepicker @error('date') is-invalid @enderror"
                        value="{{ $planning->date }}" name="date" required>
                    @error('date')
                    <span class="text-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('Planning') }}</label>
                <textarea type="text" class="form-control @error('plan') is-invalid @enderror" name="plan" cols="150"
                    rows="10" style="height: 77px;" required>{{ $planning->planning }}</textarea>
                @error('plan')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">{{ __('Perbarui') }}</button>
        </div>
    </div>
</form>
@endsection
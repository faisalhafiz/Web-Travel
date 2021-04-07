@extends('layouts.default')
@section('title', __('pages.title').__(' | Tambah Divisi'))
@section('titleContent', __('Tambah Divisi'))
@section('breadcrumb', __('Master'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Divisi') }}</div>
<div class="breadcrumb-item active">{{ __('Tambah Divisi') }}</div>
@endsection

@section('content')
<div class="card">
    <form method="POST" action="{{ route('division.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Nama') }}<code>*</code></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"
                    style="text-transform: uppercase" name="name" required autofocus>
                @error('name')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">{{ __('Tambah') }}</button>
        </div>
    </form>
</div>
@endsection
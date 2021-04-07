@extends('layouts.default')
@section('title', __('pages.title').__(' | Tambah Karyawan'))
@section('titleContent', __('Tambah Karyawan'))
@section('breadcrumb', __('Master'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Karyawan') }}</div>
<div class="breadcrumb-item active">{{ __('Tambah Karyawan') }}</div>
@endsection

@section('content')
<div class="card">
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Nama') }}<code>*</code></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required
                    autofocus>
                @error('name')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Username') }}<code>*</code></label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                    required>
                @error('username')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Password') }}<code>*</code></label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    required autocomplete="new-password">
                @error('password')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Konfirmasi Password') }}<code>*</code></label>
                <input type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
            <div class="form-group">
                <label>{{ __('Deadline Laporan') }}<code>*</code></label>
                <select class="form-control @error('d_report') is-invalid @enderror" name="d_report" required>
                    <option value="1">
                        {{ __('Harian') }}
                    </option>
                    <option value="2">
                        {{ __('Mingguan') }}
                    </option>
                </select>
                @error('d_report')
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
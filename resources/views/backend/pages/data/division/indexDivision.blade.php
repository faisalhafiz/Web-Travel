@extends('layouts.default')
@section('title', __('pages.title').__(' | Master Divisi'))
@section('titleContent', __('Divisi'))
@section('breadcrumb', __('Master'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Divisi') }}</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('division.create') }}" class="btn btn-icon icon-left btn-primary">
            <i class="far fa-edit"></i>{{ __(' Tambah Divisi') }}</a>
    </div>
    <div class="card-body">
        <table class="table-striped table" id="division" width="100%">
            <thead>
                <tr>
                    <th class="text-center">
                        {{ __('NO') }}
                    </th>
                    <th>{{ __('Nama') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($divisions as $number => $d)
                <tr>
                    <td class="text-center">
                        {{ $number+1 }}
                    </td>
                    <td>{{ $d->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('pages/data/division/indexDivision.js') }}"></script>
@endsection
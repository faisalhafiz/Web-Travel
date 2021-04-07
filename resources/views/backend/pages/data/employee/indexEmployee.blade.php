@extends('layouts.default')
@section('title', __('pages.title').__(' | Master Karyawan'))
@section('titleContent', __('Karyawan'))
@section('breadcrumb', __('Master'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Karyawan') }}</div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('user.create') }}" class="btn btn-icon icon-left btn-primary">
            <i class="far fa-edit"></i>{{ __(' Tambah Karyawan') }}</a>
    </div>
    <div class="card-body">
        <table class="table-striped table" id="employee" width="100%">
            <thead>
                <tr>
                    <th class="text-center">
                        {{ __('No') }}
                    </th>
                    <th>{{ __('Nama') }}</th>
                    <th>{{ __('Username') }}</th>
                    <th>{{ __('Divisi') }}</th>
                    <th>{{ __('Role') }}</th>
                    <th>{{ __('Aksi') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $number => $s)
                <tr>
                    <td class="text-center">
                        {{ $number + 1 }}
                    </td>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->username }}</td>
                    <td>{{ $s->relationDivisions->name }}</td>
                    <td>{{ $s->relationRoles->name }}</td>
                    <td>
                        <form id="del-data{{ $s->id }}" action="{{ route('user.destroy',$s->id) }}" method="POST"
                            class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-action mb-1 mt-1" data-toggle="tooltip" title="Delete"
                                data-confirm="Apakah Anda Yakin?|Aksi ini tidak dapat dikembalikan. Apakah ingin melanjutkan?"
                                data-confirm-yes="document.getElementById('del-data{{ $s->id }}').submit();"><i
                                    class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('pages/data/employee/indexEmployee.js') }}"></script>
@endsection
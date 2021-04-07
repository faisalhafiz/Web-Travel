@extends('layouts.default')
@section('title', __('pages.title').__(' | Perencanaan'))
@section('titleContent', __('Perencanaan'))
@section('breadcrumb', __('Karyawan'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Perencanaan') }}</div>
@endsection


@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('plan.create') }}" class="btn btn-icon icon-left btn-primary">
            <i class="far fa-edit"></i>{{ __(' Buat Perencanaan') }}</a>
    </div>
    <div class="card-body">
        <table class="table-striped table" id="plan" width="100%">
            <thead>
                <tr>
                    <th class="text-center">
                        {{ __('NO') }}
                    </th>
                    <th>{{ __('Nama Karyawan') }}</th>
                    <th>{{ __('Tanggal') }}</th>
                    <th>{{ __('Planning') }}</th>
                    <th>{{ __('Aksi') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($planning as $number => $p )
                <tr>
                    <td class="text-center">
                        {{ $number + 1 }}
                    </td>
                    <td>
                        {{ $p->relationUser->name }}
                    </td>
                    <td>
                        {{ date("d-M-Y", strtotime($p->date)) }}
                    </td>
                    <td>
                        {{ Str::limit($p->planning, 20) }}
                    </td>
                    <td>
                        <a href="{{ route('plan.show',$p->id) }}" class="btn btn-primary btn-action mb-1 mt-1
                        mr-1" data-toggle="tooltip" title="Lihat"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('plan.edit',$p->id) }}" class="btn btn-info btn-action mb-1 mt-1
                            mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <form id="del-data{{ $p->id }}" action="{{ route('plan.destroy',$p->id) }}" method="POST"
                            class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-action mb-1 mt-1" data-toggle="tooltip" title="Delete"
                                data-confirm="Apakah Anda Yakin?|Aksi ini tidak dapat dikembalikan. Apakah ingin melanjutkan?"
                                data-confirm-yes="document.getElementById('del-data{{ $p->id }}').submit();"><i
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
<script src="{{ asset('pages/employee/indexPlanning.js') }}"></script>
@endsection
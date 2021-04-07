@extends('layouts.default')
@section('title', __('pages.title').__(' | Pengumpulan Laporan'))
@section('titleContent', __('Pengumpulan Laporan'))

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('reports.create') }}" class="btn btn-icon icon-left btn-primary">
            <i class="far fa-edit"></i>{{ __(' Buat Laporan') }}</a>
    </div>
    <div class="card-body">
        <table class="table-striped table" id="report" width="100%">
            <thead>
                <tr>
                    <th class="text-center">
                        {{ __('NO') }}
                    </th>
                    <th>{{ __('Nama Laporan') }}</th>
                    <th>{{ __('Tanggal') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Keterangan') }}</th>
                    {{-- <th>{{ __('note') }}</th> --}}
                    <th>{{ __('Aksi') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $number => $r )
                <tr>
                    <td class="text-center">
                        {{ $number + 1 }}
                    </td>
                    <td>
                        {{ $r->name }}
                    </td>
                    <td>
                        {{ date("d-M-Y", strtotime($r->tgl)) }}
                    </td>
                    <td>
                        @if ($r->acc == 'Pending')
                        <span class="badge badge-info">{{ __('PENDING') }}</span>
                        @elseif ($r->acc == 'Ditolak')
                        <span class="badge badge-danger">{{ __('DITOLAK') }}</span>
                        @else
                        <span class="badge badge-success">{{ __('DITERIMA') }}</span>
                        @endif
                    </td>
                    <td>
                        @if ($r->info != null)
                        {{ $r->info }}
                        @else
                        {{ __('Tidak ada') }}
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('reports.show',$r->id) }}" class="btn btn-primary btn-action mb-1 mt-1
                        mr-1" data-toggle="tooltip" title="Lihat progress"><i class="fas fa-eye"></i></a>
                        @if ($r->acc != 'Diterima')
                        <form id="del-data{{ $r->id }}" action="{{ route('reports.destroy',$r->id) }}" method="POST"
                            class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-action mb-1 mt-1" data-toggle="tooltip" title="Delete"
                                data-confirm="Apakah Anda Yakin?|Aksi ini tidak dapat dikembalikan. Apakah ingin melanjutkan?"
                                data-confirm-yes="document.getElementById('del-data{{ $r->id }}').submit();"><i
                                    class="fas fa-trash"></i></button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('pages/report/indexReport.js') }}"></script>
@endsection
@extends('layouts.default')
@section('title', __('pages.title').__(' | Pengumpulan Laporan'))
@section('titleContent', __('Pengumpulan Laporan'))
@section('breadcrumb', __('Karyawan'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Pengumpulan') }}</div>
@endsection


@section('content')
<div class="card">
    <div class="card-body">
        <table class="table-striped table" id="report" width="100%">
            <thead>
                <tr>
                    <th class="text-center">
                        {{ __('NO') }}
                    </th>
                    <th>{{ __('Nama Karyawan') }}</th>
                    <th>{{ __('Nama Laporan') }}</th>
                    <th>{{ __('Tanggal') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Divisi') }}</th>
                    <th>{{ __('Keterangan') }}</th>
                    @isset($pending)
                    <th>{{ __('Aksi') }}</th>
                    @endisset
                    @empty($pending)
                    <th>{{ __('Aksi') }}</th>
                    @endempty
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $number => $r )
                <tr>
                    <td class="text-center">
                        {{ $number + 1 }}
                    </td>
                    <td>
                        {{ $r->namek }}
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
                        {{ $r->named }}
                    </td>
                    <td>
                        @if ($r->info != null)
                        {{ $r->info }}
                        @else
                        {{ __('Kosong') }}
                        @endif
                    </td>
                    @isset($pending)
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('reports.show',$r->id) }}" type="button" class="btn btn-primary">
                                {{ __('Lihat Laporan') }}
                            </a>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-expanded="false">
                                <span class="sr-only">{{ __('Toggle Dropdown') }}</span>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(120px, 36px, 0px);">
                                <a class="dropdown-item" onclick="accept({{ $r->id }},'{{ $r->namek }}')"
                                    style="cursor: pointer">
                                    {{ __('Terima Laporan') }}
                                </a>
                                <a class="dropdown-item" onclick="decline({{ $r->id }},'{{ $r->namek }}')"
                                    style="cursor: pointer">
                                    {{ __('Tolak Laporan') }}
                                </a>
                            </div>
                        </div>
                    </td>
                    @endisset
                    @empty($pending)
                    <td>
                        <a href="{{ route('reports.show',$r->id) }}" type="button"
                            class="btn btn-icon icon-left btn-block btn-primary">
                            <i class="fas fa-eye"></i>{{ __(' Lihat Laporan') }}
                        </a>
                    </td>
                    @endempty
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
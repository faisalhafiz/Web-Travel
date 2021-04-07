@extends('layouts.default')
@section('title', __('pages.title').__(' | History Aksi'))
@section('titleContent', __('History Aksi'))

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table-striped table" id="history" width="100%">
            <thead>
                <tr>
                    <th class="text-center">
                        {{ __('NO') }}
                    </th>
                    <th>{{ __('Tanggal') }}</th>
                    <th>{{ __('Keterangan') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($history as $number => $h )
                <tr>
                    <td class="text-center">
                        {{ $number + 1 }}
                    </td>
                    <td>
                        {{ date("d-M-Y", strtotime($h->date)) }}
                    </td>
                    <td>
                        {{ $h->info }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('pages/history/indexHistory.js') }}"></script>
@endsection
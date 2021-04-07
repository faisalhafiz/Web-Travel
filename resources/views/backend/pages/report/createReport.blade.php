@extends('layouts.default')
@section('title', __('pages.title').__(' | Tambah Laporan'))
@section('titleContent', __('Tambah Laporan'))
@section('breadcrumb', __('Laporan'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Tambah Laporan') }}</div>
@endsection

@section('content')
@if(Session::has('status'))
<div class="alert alert-danger alert-has-icon">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
        <div class="alert-title">{{ __('Informasi') }}</div>
        {{ Session::get('status') }}
    </div>
</div>
@endif
<form method="POST" action="{{ route('reports.store') }}" enctype="multipart/form-data" id="addReport">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label>{{ __('Nama Laporan') }}<code>*</code></label>
                <div class="input-group">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>
                </div>
                @error('name')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Tanggal') }}<code>*</code></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="far fa-calendar"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control datepicker @error('tgl') is-invalid @enderror" name="tgl"
                        required>
                    @error('tgl')
                    <span class="text-danger" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('Keterangan') }}</label>
                <textarea type="text" class="form-control @error('info') is-invalid @enderror" name="info" cols="150"
                    rows="10" style="height: 77px;"></textarea>
                @error('info')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
    </div>
    <h2 class="section-title">{{ __('Progress') }}</h2>
    <div class="card card-primary">
        <div class="card-body">
            <table class="table-striped table" id="penawaran" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">
                            {{ __('Progress') }}<code>*</code>
                        </th>
                        <th>{{ __('Aksi') }}</th>
                    </tr>
                </thead>
                <tbody class="drop"></tbody>
                @error('progress.*')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </table>
            <a class="btn btn-primary btn-icon btn-block icon-left mt-3 mb-3" style="cursor: pointer;color: white"
                onclick="add_item()">
                <i class="fa fa-plus"></i>{{ __(' Tambah Progress') }}
            </a>
            <div class="section-title mt-0">{{ __('Foto') }}</div>
            <p class="section-lead">
                {{ __('Upload foto tambahan untuk bukti pengumpulan') }}
            </p>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="photo[]"
                        accept="image/png, image/jpeg, image/jpg, image/svg" id="photo" multiple required>
                    <label class="custom-file-label" for="photo" id="photo_label">{{ __('Pilih File') }}</label>
                </div>
                @error('photo')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
                <div class="fileListDisplay"></div>
            </div>
            <div class="section-title mt-0">{{ __('File Tambahan') }}</div>
            <p class="section-lead">
                {{ __('Upload file tambahan berupa Excel ataupun PDF') }}
            </p>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="doc[]" accept=".pdf, .xls, .xlsx" id="doc"
                        multiple>
                    <label class="custom-file-label" for="doc" id="doc_label">{{ __('Pilih File') }}</label>
                </div>
                @error('files')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
                <div class="fileListDisplay"></div>
            </div>
        </div>
    </div>
    <ul class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
        <li class="mfb-component__wrap">
            <a onclick="document.getElementById('addReport').submit()" data-mfb-label="Kumpulkan Laporan"
                class="mfb-component__button--main">
                <i class="mfb-component__main-icon--resting fa fa-plus"></i>
                <i class="mfb-component__main-icon--active fa fa-plus"></i>
            </a>
        </li>
    </ul>
</form>
@endsection
@section('script')
<script src="{{ asset('pages/report/createReport.js') }}"></script>
<script>
    function add_item() {
    var remove = $(".remove").length;
    $(".drop").append(
        '<tr class="remove remove_'+(remove+1)+'">'+
            "<th>" +
            '<input type="text" class="form-control @error('progress') is-invalid @enderror" name="progress[]" required autofocus>' +
            "</th>" +
            "<th>"+
            '<button type="button" class="btn btn-danger btn-block" onclick="remove_item(\''+(remove+1)+'\')"><i class="fas fa-trash"></i> Hapus</button>'+
            "</th>" +
            "</tr>"
    );
}
</script>
@endsection
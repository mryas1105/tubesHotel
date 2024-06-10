@extends('admin.templates.default')
@section('title', 'Hotel Hebat | Edit Fasilitas Kamar')

@section('content-header')

    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit Fasilitas Kamar</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active">Edit Fasilitas Kamar</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->

@endsection

@section('content')

<form action="/admin/fasilitas_kamar/{{ $fasilitasKamar->id }}" method="post">
    @csrf
    @method('POST')

    <div class="mb-3">
        <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
        <select class="form-control @error('kamar_id') is-invalid @enderror" id="tipe_kamar" name="kamar_id">
            <option selected value="{{ $fasilitasKamar->kamar->id }}">{{ $fasilitasKamar->kamar->tipe_kamar }}</option>
                @foreach ($kamar as $k)
                <option value="{{ $k->id }}">{{ $k->tipe_kamar }}</option>
                @endforeach
        </select>
        @error('kamar_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

    </div>
    <div class="mb-3">
        <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
        <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" id="nama_fasilitas" name="nama_fasilitas" value="{{ $fasilitasKamar->nama_fasilitas }}">
        @error('nama_fasilitas')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Edit</button>

</form>

@endsection

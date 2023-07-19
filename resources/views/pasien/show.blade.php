@extends('layouts.app')

@section('title', 'Show Pasien')

@section('contents')
    <h1 class="mb-0">Detail Pasien</h1>
    <hr />
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">ID Pasien</label>
            <input type="text" name="id_pasien" class="form-control" value="{{ $pasien->id_pasien }}" placeholder="ID Pasien"
                readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Nama Pasien</label>
            <input type="text" name="nama" class="form-control" value="{{ $pasien->nama }}" placeholder="Nama Pasien"
                readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="Alamat" readonly>{{ $pasien->alamat }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">No. Telp</label>
            <input type="number" name="telp" class="form-control" value="{{ $pasien->telp }}" placeholder="No Telp"
                readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">RT</label>
            <input type="number" name="rt" class="form-control" value="{{ $pasien->rt }}" placeholder="RT" readonly>
        </div>
        <div class="col">
            <label class="form-label">RW</label>
            <input type="number" name="rw" class="form-control" value="{{ $pasien->rw }}" placeholder="RW" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Kelurahan</label>
            <input type="number" name="nama" class="form-control" value="{{ $pasien->kelurahan->nama }}"
                placeholder="Kelurahan" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" value="{{ $pasien->tgl_lahir }}"
                placeholder="Tanggal Lahir" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" value="{{ $pasien->jenis_kelamin }}"
                placeholder="Jenis Kelamin" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $pasien->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $pasien->updated_at }}" readonly>
        </div>
    </div>
@endsection

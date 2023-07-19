@extends('layouts.app')

@section('title', 'Show Kelurahan')

@section('contents')
    <h1 class="mb-0">Detail Kelurahan</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Kelurahan</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Kelurahan" value="{{ $kelurahan->nama }}"
                readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kecamatan</label>
            <input type="text" name="camat" class="form-control" placeholder="Nama Kecamatan"
                value="{{ $kelurahan->camat }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kota</label>
            <input type="text" name="kota" class="form-control" placeholder="Nama Kota" value="{{ $kelurahan->kota }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $kelurahan->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $kelurahan->updated_at }}" readonly>
        </div>
    </div>
@endsection

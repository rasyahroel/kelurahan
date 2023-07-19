@extends('layouts.app')

@section('title', 'Edit Kelurahan')

@section('contents')
    <h1 class="mb-0">Edit Kelurahan</h1>
    <hr />
    <form action="{{ route('kelurahan.update', $kelurahan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kelurahan</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Kelurahan"
                    value="{{ $kelurahan->nama }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Kecamatan</label>
                <input type="text" name="camat" class="form-control" placeholder="Nama Kecamatan"
                    value="{{ $kelurahan->camat }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kota</label>
                <input type="text" name="kota" class="form-control" placeholder="Nama Kota"
                    value="{{ $kelurahan->kota }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection

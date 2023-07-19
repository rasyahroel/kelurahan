@extends('layouts.app')

@section('title', 'Create Data Kelurahan')

@section('contents')
    <h1 class="mb-0">Add Data Kelurahan</h1>
    <hr />
    <form action="{{ route('kelurahan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama Kelurahan">
            </div>
            <div class="col">
                <input type="text" name="camat" class="form-control" placeholder="Kecamatan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kota" class="form-control" placeholder="Kota">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

@extends('layouts.app')

@section('title', 'Create Data Pasien')

@section('contents')
    <h1 class="mb-0">Add Data Pasien</h1>
    <hr />
    <form action="{{ route('pasien.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="id_pasien" class="form-control" value="{{ App\Models\Pasien::generateID() }}" placeholder="ID Pasien" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama Pasien">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="alamat" placeholder="Alamat" ></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="telp" class="form-control" placeholder="No Telp">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="rt" class="form-control" placeholder="RT">
            </div>
            <div class="col">
                <input type="number" name="rw" class="form-control" placeholder="RW">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="kelurahan_id">Kelurahan</label>
            </div>
            <div class="col">
            <select name="kelurahan_id" id="kelurahan" required>
                @foreach($kelurahan as $lurah)
                <option value="{{ $lurah->id }}">{{ $lurah->nama }}</option>
                @endforeach
            </select>
        </div>
            {{--  <div class="col">
                <input type="number" name="kelurahan" class="form-control" placeholder="Kelurahan">
            </div>  --}}
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

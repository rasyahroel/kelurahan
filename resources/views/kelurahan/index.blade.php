@extends('layouts.app')

@section('title', 'Kelurahan')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Kelurahan</h1>
        <a href="{{ route('kelurahan.create') }}" class="btn btn-primary">Add Data Kelurahan</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kota</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($kelurahan->count() > 0)
                @foreach ($kelurahan as $lurah)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $lurah->nama }}</td>
                        <td class="align-middle">{{ $lurah->camat }}</td>
                        <td class="align-middle">{{ $lurah->kota }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kelurahan.show', $lurah->id) }}" type="button"
                                    class="btn btn-secondary">Detail</a>
                                <a href="{{ route('kelurahan.edit', $lurah->id) }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('kelurahan.destroy', $lurah->id) }}" method="POST" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete this kelurahan?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Kelurahan not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection

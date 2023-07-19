@extends('layouts.app')

@section('title', 'Pasien')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Pasien</h1>
        <a href="{{ route('pasien.create') }}" class="btn btn-primary">Add Data Pasien</a>
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
                <th>ID Pasien</th>
                <th>Pasien</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>RT</th>
                <th>RW</th>
                <th>Kelurahan</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($pasien->count() > 0)
                @foreach ($pasien as $p)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $p->id_pasien }}</td>
                        <td class="align-middle">{{ $p->nama }}</td>
                        <td class="align-middle">{{ $p->alamat }}</td>
                        <td class="align-middle">{{ $p->telp }}</td>
                        <td class="align-middle">{{ $p->rt }}</td>
                        <td class="align-middle">{{ $p->rw }}</td>
                        <td class="align-middle">{{ $p->kelurahan->nama }}</td>
                        <td class="align-middle">{{ $p->tgl_lahir }}</td>
                        <td class="align-middle">{{ $p->jenis_kelamin }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('pasien.show', $p->id_pasien) }}" type="button"
                                    class="btn btn-secondary">Detail</a>
                                <a href="{{ route('pasien.edit', $p->id_pasien) }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('pasien.destroy', $p->id_pasien) }}" method="POST" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete this Pasien?')">
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
                    <td class="text-center" colspan="11">Pasien not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection

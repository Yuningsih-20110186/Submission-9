@extends('layout.app')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
@endif

<div class="container mt-4">
    <h1>Data Dosen</h1>

    <!-- Search Form -->
    <form action="{{ route('dosen.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari Data Dosen...">
            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($dosen as $dosen)
                <tr>
                    <th scope="dosen">{{ $no++ }}</th>
                    <td>{{ $dosen->nip }}</td>
                    <td>{{ $dosen->nama_dosen }}</td>
                    <td>{{ $dosen->alamat }}</td>
                    <td>
                        <a href="{{ route('dosen.show', ['id' => $dosen->id]) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('dosen.edit', ['id' => $dosen->id]) }}" class="btn btn-success">Edit</a>
                        <!-- Delete Form -->
                        <form action="{{ route('dosen.delete', ['id' => $dosen->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('dosen.create') }}" class="btn btn-primary mt-3">Tambah</a>
</div>
@endsection

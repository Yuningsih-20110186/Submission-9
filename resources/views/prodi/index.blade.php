@extends('layout.app')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
@endif

<div class="container mt-4">
    <h1>Data Prodi</h1>

    <!-- Search Form -->
    <form action="{{ route('prodi.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari Data Prodi...">
            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Kode Prodi</th>
                <th scope="col">Nama Prodi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($prodi as $prodi)
                <tr>
                    <th scope="prodi">{{ $no++ }}</th>
                    <td>{{ $prodi->kode_prodi }}</td>
                    <td>{{ $prodi->nama_prodi }}</td>
                    <td>
                        <a href="{{ route('prodi.show', ['id' => $prodi->id]) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('prodi.edit', ['id' => $prodi->id]) }}" class="btn btn-success">Edit</a>
                        <!-- Delete Form -->
                        <form action="{{ route('prodi.delete', ['id' => $prodi->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('prodi.create') }}" class="btn btn-primary mt-3">Tambah</a>
</div>
@endsection

@extends('layout.app')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
@endif

<div class="container mt-4">
    <h1>Data Mata Kuliah</h1>

    <!-- Search Form -->
    <form action="{{ route('matakuliah.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari Data Mata Kuliah...">
            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Kode Mata Kuliah</th>
                <th scope="col">Nama Mata kuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($matakuliah as $matakuliah)
                <tr>
                    <th scope="matakuliah">{{ $no++ }}</th>
                    <td>{{ $matakuliah->kode_mk }}</td>
                    <td>{{ $matakuliah->nama_mk }}</td>
                    <td>{{ $matakuliah->sks }}</td>
                    <td>
                        <a href="{{ route('matakuliah.show', ['id' => $matakuliah->id]) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('matakuliah.edit', ['id' => $matakuliah->id]) }}" class="btn btn-success">Edit</a>
                        <!-- Delete Form -->
                        <form action="{{ route('matakuliah.delete', ['id' => $matakuliah->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mt-3">Tambah</a>
</div>
@endsection

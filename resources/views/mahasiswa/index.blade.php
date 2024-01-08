@extends('layout.app')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
@endif

<div class="container mt-4">
    <h1>Data Mahasiswa</h1>

    <!-- Search Form -->
    <form action="{{ route('dosen.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari Data Mahasiswa...">
            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis kelamin</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($mahasiswa as $mahasiswa)
                <tr>
                    <th scope="mahasiswa">{{ $no++ }}</th>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama_mhs }}</td>
                    <td>{{ $mahasiswa->tgl_lahir }}</td>
                    <td>{{ $mahasiswa->alamat }}</td>
                    <td>{{ $mahasiswa->jenis_kelamin }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.show', ['id' => $mahasiswa->id]) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('mahasiswa.edit', ['id' => $mahasiswa->id]) }}" class="btn btn-success">Edit</a>
                        <!-- Delete Form -->
                        <form action="{{ route('mahasiswa.delete', ['id' => $mahasiswa->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mt-3">Tambah</a>
</div>
@endsection

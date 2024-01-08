@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Edit Data Dosen</h2>

        <!-- Form untuk mengedit data dosen -->
        <form method="post" action="{{ route('dosen.update', $dosen->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul" class="form-label">NIP:</label>
                <input type="text" class="form-control" id="nip" name="nip" value="{{ $dosen->nip }}">
            </div>

            <div class="mb-3">
                <label for="nama_dosen" class="form-label">Nama Dosen:</label>
                <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="{{ $dosen->nama_dosen }}">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dosen->alamat }}">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection

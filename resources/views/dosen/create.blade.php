@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Tambah Data Dosen</h2>

        <!-- Form untuk menambah data dosen -->
        <form method="post" action="{{ route('dosen.store') }}">
            @csrf

            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="text" class="form-control" id="nip" name="nip" required>
            </div>

            <div class="form-group">
                <label for="nama_dosen">Nama Dosen:</label>
                <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
@endsection

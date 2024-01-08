@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Tambah Data Prodi</h2>

        <!-- Form untuk menambah data prodi -->
        <form method="post" action="{{ route('prodi.store') }}">
            @csrf

            <div class="form-group">
                <label for="kode_prodi">Kode Prodi :</label>
                <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" required>
            </div>

            <div class="form-group">
                <label for="nama_prodi">Nama Prodi :</label>
                <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
@endsection

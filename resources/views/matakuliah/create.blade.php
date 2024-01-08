@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Tambah Data Mata Kuliah</h2>

        <!-- Form untuk menambah data mata kuliah -->
        <form method="post" action="{{ route('matakuliah.store') }}">
            @csrf

            <div class="form-group">
                <label for="kode_mk">Kode Mata kuliah :</label>
                <input type="text" class="form-control" id="kode_mk" name="kode_mk" required>
            </div>

            <div class="form-group">
                <label for="nama_mk">Nama Mata Kuliah :</label>
                <input type="text" class="form-control" id="nama_mk" name="nama_mk" required>
            </div>

            <div class="form-group">
                <label for="sks">SKS :</label>
                <input type="text" class="form-control" id="sks" name="sks" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
@endsection

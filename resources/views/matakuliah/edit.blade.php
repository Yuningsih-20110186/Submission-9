@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Edit Data Mata Kuliah</h2>

        <!-- Form untuk mengedit data mata kuliah -->
        <form method="post" action="{{ route('matakuliah.update', $matakuliah->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="kode_mk" class="form-label">Kode Mata Kuliah :</label>
                <input type="text" class="form-control" id="kode_mk" name="kode_mk" value="{{ $matakuliah->kode_mk }}">
            </div>

            <div class="mb-3">
                <label for="nama_mk" class="form-label">Nama Mata Kuliah :</label>
                <input type="text" class="form-control" id="nama_mk" name="nama_mk" value="{{ $matakuliah->nama_mk}}">
            </div>

            <div class="mb-3">
                <label for="sks" class="form-label">SKS :</label>
                <input type="text" class="form-control" id="sks" name="sks" value="{{ $matakuliah->sks }}">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection

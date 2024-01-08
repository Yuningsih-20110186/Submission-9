@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Edit Data Mata Kuliah</h2>

        <!-- Form untuk mengedit data prodi -->
        <form method="post" action="{{ route('prodi.update', $prodi->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="kode_prodi" class="form-label">Kode Prodi :</label>
                <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" value="{{ $prodi->kode_prodi }}">
            </div>

            <div class="mb-3">
                <label for="nama_prodi" class="form-label">Nama Prodi :</label>
                <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" value="{{ $prodi->nama_prodi }}">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection

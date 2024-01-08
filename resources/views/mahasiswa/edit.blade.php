@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Edit Data Mahasiswa</h2>

        <!-- Form untuk mengedit data mahasiswa -->
        <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul" class="form-label">NIM :</label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}" >
            </div>

            <div class="mb-3">
                <label for="nama_mhs" class="form-label">Nama Mahasiswa :</label>
                <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" value="{{ $mahasiswa->nama_mhs}}">
            </div>

            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir :</label>
                <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $mahasiswa->tgl_lahir }}">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat :</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $mahasiswa->alamat }}">
            </div>

            <div class="mb-3">
                <label for="jenis_kalamin" class="form-label">Jenis Kelamin :</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="laki-laki">--Pilih--</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection

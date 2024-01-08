@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h2>Tambah Data Mahasiswa</h2>

        <!-- Form untuk menambah data mahasiswa -->
        <form method="post" action="{{ route('mahasiswa.store') }}">
            @csrf

            <div class="form-group">
                <label for="judul">NIM :</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>

            <div class="form-group">
                <label for="nama_mhs">Nama Mahasiswa :</label>
                <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" required>
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir :</label>
                <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="laki-laki">--Pilih--</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>



            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
@endsection

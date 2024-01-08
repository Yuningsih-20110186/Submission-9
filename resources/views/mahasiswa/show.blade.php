@extends('layout.app')

@section('content')
    <div class="container mt-2">
        <h2>Detail Data Mahasiswa</h2>

        <div class="card">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>NIM :</strong> {{ $mahasiswa->nim }}</li>
                    <li class="list-group-item"><strong>Nama Mahasiswa :</strong> {{ $mahasiswa->nama_mhs }}</li>
                    <li class="list-group-item"><strong>Tanggal Lahir :</strong> {{ $mahasiswa->tgl_lahir }}</li>
                    <li class="list-group-item"><strong>Alamat :</strong> {{ $mahasiswa->alamat }}</li>
                    <li class="list-group-item"><strong>Jenis Kelamin :</strong> {{ $mahasiswa->jenis_kelamin }}</li>
                </ul>
            </div>
        </div>

        <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection

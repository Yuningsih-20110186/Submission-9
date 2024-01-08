@extends('layout.app')

@section('content')
    <div class="container mt-2">
        <h2>Detail Data Dosen</h2>

        <div class="card">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>NIP:</strong> {{ $dosen->nip }}</li>
                    <li class="list-group-item"><strong>Nama Dosen:</strong> {{ $dosen->nama_dosen }}</li>
                    <li class="list-group-item"><strong>Alamat:</strong> {{ $dosen->alamat }}</li>
                </ul>
            </div>
        </div>

        <a href="{{ route('dosen.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection

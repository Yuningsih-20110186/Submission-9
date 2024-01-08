@extends('layout.app')

@section('content')
    <div class="container mt-2">
        <h2>Detail Data Prodi</h2>

        <div class="card">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Kode Prodi :</strong> {{ $prodi->kode_prodi }}</li>
                    <li class="list-group-item"><strong>Nama Prodi :</strong> {{ $prodi->nama_prodi }}</li>
                </ul>
            </div>
        </div>

        <a href="{{ route('prodi.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection

@extends('layout.app')

@section('content')
    <div class="container mt-2">
        <h2>Detail Data Mata Kuliah</h2>

        <div class="card">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Kode Mata Kuliah :</strong> {{ $matakuliah->kode_mk }}</li>
                    <li class="list-group-item"><strong>Nama Mata Kuliah :</strong> {{ $matakuliah->nama_mk }}</li>
                    <li class="list-group-item"><strong>SKS :</strong> {{ $matakuliah->sks }}</li>
                </ul>
            </div>
        </div>

        <a href="{{ route('matakuliah.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection

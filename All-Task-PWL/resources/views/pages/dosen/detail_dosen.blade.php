@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <h1>Halaman Detail Dosen</h1>
        <div class="card">
            <div class="card-header">Detail Dosen</div>
            <div class="card-body">
                <p>NIDN: {{ $detailDosen->nidn }}</p>
                <p>Nama: {{ $detailDosen->nama }}</p>
            </div>
        </div>
    </div>
@endsection
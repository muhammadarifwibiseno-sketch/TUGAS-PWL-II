    @extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <h1>Halaman Detail Mahasiswa</h1>
        <div class="card">
            <div class="card-header">Detail Mahasiswa</div>
            <div class="card-body">
                <p>NPM: {{ $detailMahasiswa->npm }}</p>
                <p>NIDN: {{ $detailMahasiswa->nidn }}</p>
                <p>Nama: {{ $detailMahasiswa->nama }}</p>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.template')

@section('content')

 
  <div class="container mt-3">
        <h1>Form Mahasiswa</h1>
    <div class="card">
            <div class="card-header fw-bold">
                {{ isset($detailMahasiswa) ? 'Edit Mahasiswa' : 'Tambah Mahasiswa' }}
            </div>
            <div class="card-body">

                <form method="POST"
                    action="{{ isset($detailMahasiswa) ? route('update_mahasiswa', ['id' => $detailMahasiswa->npm]) : route('store_mahasiswa') }}">
                    @csrf
                    @if (isset($detailMahasiswa))
                        @method('put')
                    @endif
                    <div class="mb-3">
                        <label class="form-label">NPM</label>
                        <input type="text" class="form-control" name="npm"
                            value="{{ old('npm', $detailMahasiswa->npm ?? '') }}">
                        @error('npm')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">NIDN</label>
                        <input type="text" class="form-control" name="nidn"
                            value="{{ old('nidn', $detailMahasiswa->nidn ?? '') }}" readonly>
                        @error('nidn')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama"
                            value="{{ old('nama', $detailMahasiswa->nama ?? '') }}">
                        @error('nama')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
  </div>

@endsection
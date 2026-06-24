@extends('layouts.template')

@section('content')

  <div class="container mt-3">
        <h1>Form Dosen</h1>
    <div class="card">
            <div class="card-header fw-bold">
                {{ isset($detailDosen) ? 'Edit Dosen' : 'Tambah Dosen' }}
            </div>
            <div class="card-body">

                <form method="POST"
                    action="{{ isset($detailDosen) ? route('update_dosen', ['id' => $detailDosen->nidn]) : route('store_dosen') }}">
                    @csrf
                    @if (isset($detailDosen))
                        @method('put')
                    @endif
                    <div class="mb-3">
                        <label class="form-label">NIDN</label>
                        <input type="text" class="form-control" name="nidn"
                            value="{{ old('nidn', $detailDosen->nidn ?? '') }}">
                        @error('nidn')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama"
                            value="{{ old('nama', $detailDosen->nama ?? '') }}">
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

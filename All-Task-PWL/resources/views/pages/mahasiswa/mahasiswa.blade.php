@extends('layouts.template')

@section('content')

  <div class="container mt-3">
    <h1>Halaman Mahasiswa</h1>
    @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    @endif
    <div class="card p-3">
        <div class="mb-2"> 
          <a href="{{ route('form_add_mahasiswa') }}" class="btn btn-primary btn-sm">Tambah Data Mahasiswa</a>
        </div>
    
    <table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col" class="text-center">NO</th>
      <th scope="col">NPM</th>
      <th scope="col">NIDN</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($dataMahasiswa as $item)
        <tr>
            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $item->npm }}</td>
            <td>{{ $item->nidn }}</td>
            <td>{{ $item->nama }}</td>
            <td class="text-center">
                <a href="{{ route('detail_mahasiswa', ['id' => $item->npm]) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i>
                  Detail</a>
                <a href="{{ route('edit_mahasiswa', ['id' => $item->npm]) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i>
                  Edit</a>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{ $item->npm }}">
                  Hapus
                </button>
            </td>
        </tr>
        <div class="modal fade" id="hapus{{ $item->npm }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <form action="{{ route('delete_mahasiswa', ['id' => $item->npm]) }}" method="POST">
                  @csrf
                  @method('delete')
                  <div class="modal-content">
                      <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Mahasiswa</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                              aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          Mahasiswa dengan nama <strong>{{ $item->nama }} akan dihapus</strong>, apakah
                          anda
                          yakin?
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary"
                              data-bs-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary">Hapus Mahasiswa</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
    @endforeach
    

  </tbody>
</table>
    </div>
  </div>

@endsection
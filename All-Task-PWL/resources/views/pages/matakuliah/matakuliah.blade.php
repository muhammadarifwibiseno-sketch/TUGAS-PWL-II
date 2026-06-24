@extends('layouts.template')

@section('content')

  <div class="container mt-3">
    <h2>Mata Kuliah</h2>
    <div class="card p-3">
    
    <table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col" class="text-center">NO</th>
      <th scope="col">Kode Mata Kuliah</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">SKS</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($dataMatakuliah as $item)
        <tr>
            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $item->kode_matakuliah }}</td>
            <td>{{ $item->nama_matakuliah }}</td>
            <td>{{ $item->sks }}</td>
            <td>
                <button class="btn btn-primary btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
            </td>
        </tr>
    @endforeach
    

  </tbody>
</table>
    </div>
  </div>

@endsection
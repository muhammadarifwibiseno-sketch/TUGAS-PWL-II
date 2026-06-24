<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Beranda</title>
    <style>
      .footer {
        background-color: #303030;
        color: white;
        text-align: center;
        padding: 15px;
      }
    </style>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">MyBlog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{url('/beranda')}}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/dosen')}}">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/mahasiswa')}}">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/matakuliah')}}">Mata Kuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/krs')}}">KRS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/jadwal')}}">Jadwal</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
    <div class="flex-grow-1">
      @yield('content')
    </div>

      @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
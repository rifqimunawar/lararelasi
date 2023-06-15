<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rifqi Munawar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#" style="color: blue">Kosan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="{{ route('penghuni.index') }}">Penghuni</a>
            <a class="nav-link" href="{{ route('kamar.index') }}">Kamar</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-12 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Data Penghuni Kosan <br /></h1>
            <h4><span class="text-primary">Rifqi Munawar</span>
            </h4>
          <p style="color: hsl(217, 10%, 50.8%)">
            Kelas TIF A1 -> 41037006211013
          </p>
        </div>

        <div class="card info-card sales-card">
          <div class="container my-3">
      
              <form action="{{ route('kamar.store') }}" method="post">
                @csrf
                <div class="mb-2">
                  <label for="name">Nama Kamar Baru</label>
                  <input class="form-control" type="text" name="name" aria-label="default input example">
                </div>
                
                </div>
                <div class="d-flex justify-content-end">
                  <a href="{{ route('kamar.index') }}" class="btn btn-warning btn-sm m-2">Kembali</a>
                  <button type="submit" class="btn btn-primary btn-sm m-2">Simpan</button>
                </div>
              </form>
      
          </div>
      </div>

      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->


    <!-- sweetalert untuk notifikasi -->
    {{-- @include('sweetalert::alert') --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
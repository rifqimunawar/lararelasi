<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rifqi Munawar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    
    <!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Tugas PBF <br /></h1>
            <h4><span class="text-primary">Rifqi Munawar</span>
            </h4>
          <p style="color: hsl(217, 10%, 50.8%)">
            Kelas TIF A1 -> 41037006211013
          </p>
        </div>

        <div class="card info-card sales-card">
          <div class="container my-3">
              <h4 class="my-5">Galeri</h4>
      
              <a class="btn btn-primary mb-3 mx-3" href="/admin/galeri/create">Tambah Gambar</a>
              
              <table class="table table-striped table-hover">
                  <tr>
                      <td class="text-center">No</td>
                      <td class="text-center">Nama</td>
                      <td class="text-start">Domisili</td>
                      <td class="text-center"> Kamar</td>
                      <td class="text-center"> Aksi</td>
                  </tr>
                  @foreach ($penghuni as $huni)
                  <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td class="text-center">{{ $huni->name }}</td>
                      <td class="text-start">{{ $huni->domisili }}</td>
                      <td class="text-start">{{ $huni->kamar_id }}</td>
                      <td class="text-center">
                          <form action="" method="POST">
                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                              ('Apakah Anda yakin ingin menghapus foto ini?')">Hapus</button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
              </table>
      
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
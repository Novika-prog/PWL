<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Headers · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
</svg>

<main>
  <h1 class="visually-hidden">Headers examples</h1>



  <div class="b-example-divider"></div>

  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <img src="image/logo.png" width="30px" height="30px">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="daftar.php" class="nav-link px-2 link-dark">Formulir Siswa</a></li>
          <li><a href="list.php" class="nav-link px-2 link-dark">Siswa Terdaftar</a></li>
        </ul>
        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://www.ayokutip.com/wp-content/uploads/2019/02/gambar-pikachu-keren-5.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Tentang Penulis</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Coming Soon</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo -->
<!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo -->
<!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo -->

    <body>
        <header>
          <center>
            <h3>Form Pendaftaran Siswa</h3>
          </center>
        </header>

<!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo -->
<!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo -->
<!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo -->

        <form action="pendaftaran.php" method="POST">
          <fieldset>
          <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" placeholder="isikan nama lengkap"/>
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Jurusan</label>
              <select name="jurusan" class="form-select">
                <option value='Jurusan' disabled=''>Pilih Jurusan</option>
                <option value='BB'>BB</option>
                <option value='APH'>APH</option>
                <option value='TB'>TB</option>
                <option value='KCK'>KCK</option>
                <option value='KCR'>KCR</option>
              </select>
              <p><font color="grey">
                BB : Busana Butik | APH : Akomodasi Perhotelan | TB : Tata Boga | KCK : Kecantikan Kulit | KCR : Kecantikan Rambut</font></p>
            </div>
            <div class="mb-3">
              <div class="form-check">
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="daftar" value="Daftar">Daftar</button>
          </fieldset>
        </form>
        
<!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo -->
<!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo -->
<!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo --><!-- halo -->

    </body>
</html>
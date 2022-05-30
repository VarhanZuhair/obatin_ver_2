<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">

    <title>Obatin</title>
  </head>
  <body>
    <section>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
          <div class="container">
            <a class="navbar-brand" href="#">OBATIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active text-danger" aria-current="page" href="#">Beranda</a>
                </li>
              </ul>
              <a href="login.php" class=" ms-auto">
                <button class="btn btn-outline-danger" type="button">Login</button>
              </a>
            </div>
          </div>
        </nav>
        <!-- END NAVBAR -->
    </section>

    <!-- COMPONENT UTAMA -->
    <section>
      <div class="container main-hero">
        <h1 class="text-center">Selamat datang di Obatin</h1>
        <h3 class="text-center">Tekan Tombol Belanja Sekarang untuk memulai</h3>
        <div class="row p-4">
          <div class="col"></div>
          <div class="col text-center">
            <a href="beranda.php"><button class="btn btn-lg shadow-lg" id="tombol-1" type="button">Belanja Sekarang</button></a>

          </div>
          <div class="col"></div>
        </div>
      </div>
    </section>
    <!-- END COMPONENT UTAMA -->

    <!-- FOOTER -->
    <section>
      <footer class="fixed-bottom">
        <p>Created by Kelompok 10</p>
      </footer>
    </section>
    <!-- END FOOTER -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
<?php
require 'functions.php';
session_start();

if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/beranda.css">

    <title>Beranda</title>
  </head>
  <body>
    <section>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
          <div class="container">
            <a class="navbar-brand" href="index.php">OBATIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active text-danger" aria-current="page" href="beranda.php">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-secondary" aria-current="page" href="#">Obat & Vitamin</a>
                </li>
              </ul>
              
                  <?php
                  if(isset($_COOKIE['username'])){ 
                    echo '
                   
                    <a class="dropdown-toggle ms-auto" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
                      echo "Welcome, ".$_COOKIE['username'];
                    echo '</a>
                    <ul class="dropdown-menu me-auto" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">My Profile</a></li>
                      <li><a class="dropdown-item" href="#">Coming Soon</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>';
                      // echo $_COOKIE['username'];
                  }else{
                    echo '
                    <a href="login.php" class=" ms-auto">
                    <button class="btn btn-outline-danger" type="button">
                    Login
                    </a>';
                  }
                  ?>
                  <!-- Login -->
                </button>
              </a>
            </div>
          </div>
        </nav>
        <!-- END NAVBAR -->
    </section>

    <!-- Tab Search -->
    <section>
      <div class="container">
        <div class="row pt-5">
          <div class="col-11">
            <form class="">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          </div>
          <div class="col-1">
            <form class="">
              <button class="btn btn btn-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Tab Search -->

    <!-- Category -->
    <section>
      <div class="container">
        <!-- Judul -->
        <div class="row py-5 my-2">
          <h2 class="text-center">Obat dan Vitamin Berdasarkan Kategori</h2>
        </div>
        <!-- Baris 1 -->
        <div class="row justify-content-center gap-5 mb-5">
          <a href="#" class="col-4 px-4 kotak-kategori text-wrap">
            <div >
              <h3 class="text-center">Batuk dan Flu</h3>
            </div>
          </a>
          <a href="#" class="col-4 px-4 kotak-kategori">
            <div>
              <h3 class="text-center justify-content-center">Perawatan Hewan</h3>
            </div>
          </a>
          <a href="#" class="col-4 px-4 kotak-kategori">
            <div >
              <h3 class="text-center">Perawatan Diri</h3>
            </div>
          </a>
        </div>
        <!-- Baris 2 -->
        <div class="row justify-content-center gap-5 mb-5">
          <a href="#" class="col-4 px-4 kotak-kategori">
            <div>
              <h3 class="text-center">Kecantikan</h3>
            </div>
          </a>
          <a href="#" class="col-4 px-4 kotak-kategori">
            <div>
              <h3 class="text-center">Mulut dan Tenggorokan</h3>
            </div>
          </a>
          <a href="#" class="col-4 px-4 kotak-kategori">
            <div>
              <h3 class="text-center">Mata</h3>
            </div>
          </a>
        </div>
        
        </div>
      </div>
    </section>
    <!-- Category -->

    <!-- Produk Rekomendasi -->
    <div class="container">
      <!-- header -->
      <div class="row pt-3"> 
        <h2 class="text-center">Produk Rekomendasi</h2>
      </div>
      <!-- produknya -->
      <!-- dikasih row dengan colom 4 -->
      <div class="row pb-5 mt-5">
        <a href="obat.php"  class="col-md-3">
          <div>
            <div class="card" style="width: 18rem;">
              <img src="https://cdn.discordapp.com/attachments/818131624502886411/976689142689832991/unknown.png" style="background-size: cover" class="card-img-top" alt="Panadol">
              <div class="card-body">
                <h5 class="card-title">Panadol</h5>
                <p class="card-text">per kaplet</p>
                <b class="card-text">Rp 6.000</b>
                <p class="card-text text-secondary">Indonesia</p>
              </div>
            </div>
          </div>
        </a>
        <a href="#"  class="col-md-3">
          <div>
            <div class="card" style="width: 18rem;">
              <img src="https://cdn.discordapp.com/attachments/818131624502886411/976689142689832991/unknown.png" style="background-size: cover" class="card-img-top" alt="Panadol">
              <div class="card-body">
                <h5 class="card-title">Coming Soon</h5>
                <p class="card-text">per coming soon</p>
                <b class="card-text">Rp -</b>
                <p class="card-text text-secondary">Region</p>
              </div>
            </div>
          </div>
        </a>
        <a href="#"  class="col-md-3">
          <div>
            <div class="card" style="width: 18rem;">
              <img src="https://cdn.discordapp.com/attachments/818131624502886411/976689142689832991/unknown.png" style="background-size: cover" class="card-img-top" alt="Panadol">
              <div class="card-body">
                <h5 class="card-title">Coming Soon</h5>
                <p class="card-text">per coming soon</p>
                <b class="card-text">Rp -</b>
                <p class="card-text text-secondary">Region</p>
              </div>
            </div>
          </div>
        </a>
        <a href="#"  class="col-md-3">
          <div>
            <div class="card" style="width: 18rem;">
              <img src="https://cdn.discordapp.com/attachments/818131624502886411/976689142689832991/unknown.png" style="background-size: cover" class="card-img-top" alt="Panadol">
              <div class="card-body">
                <h5 class="card-title">Coming Soon</h5>
                <p class="card-text">per coming soon</p>
                <b class="card-text">Rp -</b>
                <p class="card-text text-secondary">Region</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="row mb-5">
      <h2 class="text-center">COMING SOON</h2>
    </div>
    <div class="row"></div>
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
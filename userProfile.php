<?php
require 'functions.php';
$username = $_COOKIE['username'];

$results = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
// var_dump($results);

// $rows = [];
// while($row = mysqli_fetch_assoc($results)){
//   $rows[] = $row; 
// }

?>
!<!doctype html>
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
                    <a href="logout.php" class=" text-danger ms-auto">
                        <button class="btn btn-outline-danger" type="button">
                        Logout
                        </a>';
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

    <!-- PROFILE -->
    <div class="container">
      <div class="row mt-md-5">
        <div class="col-md-4 kotak-profil">
          <div class="row mb-md-4">
            <h2>Hi, 
              <?php
                if(isset($_COOKIE['username'])){
                  echo $_COOKIE['username'];
                }
              ?>
            </h2>
          </div>
          <img src="style/pfp.jpg" alt="photo profile" width="300px" height="300px">
        </div>
        <div class="col-md-4">
          <!-- Disini nampilin data lengkap user -->
          <div class="row">
            <!-- Nama LEngkap -->
            <div class="col-6">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facere debitis reiciendis minus nulla repellendus tenetur ullam saepe numquam dolor?
            </div>
            <div class="col-6">
            <!-- <?php echo mysqli_fetch_assoc($results);?> -->
            </div>
          </div>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row"></div>
        </div>
        <div class="col-md-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis ducimus dignissimos fugiat autem officia unde eos sed odio, deleniti debitis? Cupiditate eius doloremque quae saepe incidunt tempore blanditiis ipsa nobis.</div>
      </div>
    </div>

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
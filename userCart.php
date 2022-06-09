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
                      <li><a class="dropdown-item" href="userProfile.php">My Profile</a></li>
                      <li><a class="dropdown-item" href="userCart.php">My Cart</a></li>
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

    <div class="container">
        <div class="row mt-5">
            <h2>My Cart</h2>
        </div>
        <div class="row mt-5">
            <p class="nav-link disabled">
                There is no items in your cart
            </p>
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
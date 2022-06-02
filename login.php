<?php
session_start();
require 'functions.php';
if(isset($_SESSION["login"])){
  header("Location: beranda.php");
  exit;
}
if(isset($_POST["login"])){

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  if(mysqli_num_rows($result) === 1){
    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])){
      //set session
      $_SESSION["user"] = $username;
      $_SESSION["login"] = true;

      //set cookie
      setcookie('username', $username);

      header("Location: beranda.php");
      exit;
    }
  }

  $error = true;
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
    <link rel="stylesheet" href="style/login.css">

    <title>Login</title>


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
                  <a class="nav-link active text-danger" aria-current="page" href="#">Beranda</a>
                </li>
              </ul>
              <button class="btn btn-outline-danger ms-auto" type="button">Login</button>
            </div>
          </div>
        </nav>
        <!-- END NAVBAR -->
    </section>

    <!-- FORM -->
    <section>
      <div class="row px-5 justify-content-center">
        <div class="col-md-4 py-5 px-5 shadow-lg kotak-login">
          <form name="form" action="" method="post">
            <div class="row">
              <h2 class="text-center">LOGIN</h2>
            </div>
            <div class="mb-3">
              <!-- Email -->
              <label for="exampleInputEmail1" class="form- py-3">Username</label>
              <input type="test" name="username" class="form-control kolom-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
            </div>
            <div class="mb-3">
              <!-- Password -->
              <label for="exampleInputPassword1" class="form-label py-3">Password</label>
              <input type="password" name="password" class="form-control kolom-input" id="exampleInputPassword1" placeholder="Password">
            </div>
            <?php
              if(isset($error)) : 
            ?>
            <strong class="text-danger">Username atau Password salah !</strong>
            <?php
              endif;
            ?>
            <div class="row">
              <div class="col">
                <p class="text-center">Don't have account? Click here to <a href="register.php" style="text-decoration: none;">Sign Up</a></p>
              </div>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <div class="row py-3">
              <div class="col"></div>
              <div class="col-8">
                <div class="row">
                  <button type="submit" name="login" class="btn tombol-submit"><b>LOG IN</b></button>
                </div>
              </div>
              <div class="col"></div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- END FORM -->

    <!-- FOOTER -->
    <section>
      <footer class="fixed-bottom">
        <p>Created by Kelompok 10</p>
      </footer>
    </section>
    <!-- END FOOTER -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
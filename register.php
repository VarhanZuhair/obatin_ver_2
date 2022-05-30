<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>
    <link rel="stylesheet" href="style/register.css">
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
            </div>
          </div>
        </nav>
        <!-- END NAVBAR -->
    </section>

    <!-- FORM -->
    <section>
        <div class="row px-5 justify-content-center">
          <div class="col-md-4 py-5 px-5 shadow-lg kotak-login">
            <form name="form">
              <div class="row">
                <h2 class="text-center">REGISTER</h2>
              </div>
              <div class="row">
                <label for="exampleInputFullname" class="form- py-3">Full Name</label>
                <div class="col mb-3">
                  <input type="text" class="form-control kolom-input" placeholder="First name" aria-label="First name">
                </div>
                <div class="col mb-3">
                  <input type="text" class="form-control kolom-input" placeholder="Last name" aria-label="Last name">
                </div>
              </div>
              <div class="mb-3">
                <!-- Username -->
                <label for="exampleInputPhoneNumber" class="form- py-3">Phone Number</label>
                <input type="text" name="phonenumber" class="form-control kolom-input" placeholder="Phone Number">
              </div>
              <div class="mb-3">
                <!-- Username -->
                <label for="exampleInputUsername" class="form- py-3">Username</label>
                <input type="text" name="username" class="form-control kolom-input" placeholder="Username">
              </div>
              <div class="mb-3">
                <!-- Email -->
                <label for="exampleInputEmail1" class="form- py-3">Email address</label>
                <input type="email" name="email" class="form-control kolom-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
              </div>
              <div class="mb-3">
                <!-- Password -->
                <label for="exampleInputPassword1" class="form-label py-3">Password</label>
                <input type="password" name="password" class="form-control kolom-input" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="mb-3">
                <!-- Password -->
                <label for="exampleInputPassword2" class="form-label py-3">Confirm Password</label>
                <input type="password" name="password" class="form-control kolom-input" id="exampleInputPassword1" placeholder="Confirm Password">
              </div>
              <div class="row py-3">
                <div class="col"></div>
                <div class="col-8">
                  <div class="row mt-5">
                    <button type="submit" class="btn tombol-submit"><b>REGISTER</b></button>
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
</html>
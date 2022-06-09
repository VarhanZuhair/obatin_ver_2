<?php
require 'functions.php';
$id = $_GET["id_obat"];
$dataObat = obat("SELECT * from obat WHERE id_obat = '$id'");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style/obat.css">
    <title>Obat</title>
  </head>
  <body>
    <section>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
          <div class="container">
            <a class="navbar-brand" href="beranda.php">OBATIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active text-danger" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-secondary" aria-current="page" href="#">Obat & Vitamin</a>
                </li>
              </ul>
              <a href="login.php" class=" ms-auto">
                <button class="btn btn-outline-danger" type="button">
                <?php
                  if(isset($_COOKIE['username'])){
                    echo $_COOKIE['username'];
                  } else{
                    echo "Login";
                  }
                ?>
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
          <div class="col-1 mb-4">
            <form class="">
              <button class="btn btn btn-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <?php
    foreach($dataObat as $obat ) :
    ?>
    <!-- INGFO BARANG/OBATNYA -->
    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-3">
                    <div class="row pe-2">
                        <!-- Gambar Obat -->
                        <div class="col gambar-obat">
                            <img src="<?php echo $obat['gambar_obat']; ?>" sizes="cover" alt="PANADOL" height="290px">
                        </div>
                    </div>
                    <div class="row ">
                        <!-- Detail obat -->
                        <div class="col">
                            <hr size="7px" color="black">
                            <h4>Detail Obat</h4>
                            <hr size="4px" color="black">
                            <div class="row">
                                <div class="col"><b>Manfaat </b></div>
                                <div class="col">: <?php echo $obat['manfaat_obat']; ?>.</div>
                            </div>
                            <div class="row">
                                <div class="col"><b>Bahan aktif </b></div>
                                <div class="col">: <?php echo $obat['bahan_aktif_obat']; ?>.</div>
                            </div>
                            <div class="row">
                                <div class="col"><b>Bentuk Obat </b></div>
                                <div class="col">: <?php echo $obat['bentuk_obat']; ?>.</div>
                            </div>
                            <div class="row">
                                <div class="col"><b>Kategori </b></div>
                                <div class="col">: <?php echo $obat['kategori_obat']; ?>.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <h1><?php echo $obat['nama_obat']; ?></h1>
                        <h5><?php echo $obat['bahan_aktif_obat']; ?></h5>
                        <h1>Rp <?php echo $obat['harga_obat']; ?></h1>
                    </div>
                    <div class="row mt-4">
                        <hr size="7px" color="black">
                        <h6><u>INFO OBAT</u></h6>
                    </div>
                    <div class="row">
                        <p>
                        <?php echo $obat['info_obat']; ?>
                        </p>
                    </div>
                </div>
                <!-- Kotak beli -->
                <div class="col-3 ps-2">
                    <div class="kotak-beli px-4 py-4">
                        <div class="row"><b>Atur Jumlah : </b></div>
                        <div class=" mt-3">
                            <div class="col">
                                <input type="number" placeholder="Jumlah">
                            </div>
                            <div class="col mt-3"><b>Stok <?php echo $obat['stok_obat']; ?></b></div>
                        </div>
                        <!-- <div class="row mt-3">
                            <b>Subtotal : </b>
                        </div> -->
                        <div class="row mt-3 mx-4">                           
                            <button type="submit" class="btn btn-outline-success">ADD TO CART</button>
                        </div>
                        <div class="row mt-3 mx-4">                           
                            <button type="submit" class="btn btn-outline-success">BELI</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
      endforeach;
    ?>

    <!-- FOOTER -->
    <section>
        <footer class="fixed-bottom">
          <p>Created by Kelompok 10</p>
        </footer>
      </section>
      <!-- END FOOTER -->
      
</body>
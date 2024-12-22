<?php
session_start();
if (!isset($_SESSION['login_user'])) {
  header("location: login.php");
} else {
?>

  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Jamur Geal Geol Bu Sri</title>
  </head>

  <body>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center">
      <div class="container">
        <h1 class="display-4"><span class="font-weight-bold">Jamur Geal Geol Bu Sri</span></h1>
        <hr>
        <p class="lead font-weight-bold">Monggo presakke mawon <br>
          Sugeng Dhahar</p>
      </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  bg-dark">
      <div class="container">
        <a class="navbar-brand text-white" href="user.php"><strong>Jamur Geal Geol</strong> Bu Sri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="user.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="menu_pembeli.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan_pembeli.php">PESANAN ANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Menu -->
    <div class="container">
      <div class="judul text-center mt-5">
        <h3 class="font-weight-bold">Jamur Geal Geol Bu Sri</h3>
        <h5>Caturtunggal, Depok, Sleman, Yogyakarta
          <br>Buka Jam <strong>15:00 - 17:30</strong>
        </h5>
      </div>

      <div class="row mb-5 mt-5 ">
        <div class="col-md-6 d-flex justify-content-end">
          <div class="card bg-dark text-white border-light">
            <img src="images/index/jamuroysterputihindexkiri.jpg" class="card-img" alt="Lihat Daftar Menu">
            <div class="card-img-overlay mt-5 text-center">
              <a href="menu_pembeli.php" class="btn btn-primary">LIHAT DAFTAR MENU</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-start">
          <div class="card bg-dark text-white border-light">
            <img src="images/index/jamurtiramputihindexkanan.jpg" class="card-img" alt="Lihat Pesanan">
            <div class="card-img-overlay mt-5 text-center">
              <a href="pesanan_pembeli.php" class="btn btn-primary">LIHAT PESANAN</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Menu -->

    <!-- Awal Footer -->
    <hr class="footer">
    <div class="container">
      <div class="row footer-body">
        <div class="col-md-6">
          <div class="copyright">
            <strong>Copyright</strong> <i class="far fa-copyright"></i> Jamur Geal Geol</p>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
            <label class="font-weight-bold">Follow Us </label>
            <a href="#"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
            <a href="#"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
            <a href="#"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Footer -->


    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  </body>

  </html>
<?php } ?>
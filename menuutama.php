<?php
  include 'config/menampilkan_pt.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/cssku.css">

    <title>Halaman Utama | Selamat Datang</title>
  </head>
  <body>

    <header>
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="#">
                <img src="https://mpng.subpng.com/20180709/uxw/kisspng-picsart-photo-studio-logo-android-picsart-logo-5b44005bb95c22.7032920515311831957592.jpg" width="50" height="50" alt="Pra Magang">
                Pra Magang
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a rel="styleheet" class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a rel="styleheet" class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a rel="styleheet" class="nav-link" href="halamaneditprofile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a rel="styleheet" class="btn btn-outline-primary my-2 my-sm-0" href="halamanutama.php" role="button">LOGOUT</a>
                </li>
            </ul>
            
            </nav>
        </div>
    </header>

    <!-- Awal Banner/Header -->
    <section class="Jumbotron-bg">
        <div class="jumbotron warna-bg text-white pt-5 pb-5">
        <div class="container">
            <h1 class="display-4">Hello you,DELIANA RAHMA AZAHRA!</h1>
            <p class="lead">Tingkatkan potensi mencari tempat magang dengan kartu pra magang</p>
        </div> 
        </div>
      </div>
      </section>
      <!-- Akhir Banner/Header -->
             <!--baris 1 konten-->
        <div class="container">
            <div> 
                <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-style: normal;">Recomended For you:</h2>          
       </div>
    </div>    
      <!--Baris akhir-->

      
      <!--Pt Awal-->
      <div class="contaimer">
      <a class="btn btn-primary btn-lg mb-3 ml-3" href="halaman_tambah_pt.php" role="button">Tambah Informasi Perusahaan</a>
        <div class="row">

          <?php while ($row = $q->fetch()):
          $id = $row['id'];
          $img = $row['image'];
          $nama_perusahaan = $row['nama_perusahaan'];
          $alamat = $row['alamat'];
          $kode_pos = $row['kode_pos'];
          $jam_buka = $row['jam_buka'];
          $provinsi = $row['provinsi'];
          $telepon = $row['telepon'];
          $divisi = $row['divisi'];
          $need_person = $row['need_person'];
          ?>
          <div class="col-md-3 mb-5">
            <div class="card">
            <form action="halaman_edit_pt.php" method="POST">
             <input type="hidden" name="id" value="<?php echo $id; ?>">
             <input type="hidden" name="image" value="<?php echo $img; ?>">
             <input type="hidden" name="nama_perusahaan" value="<?php echo $dnama_perusahaan; ?>">
             <input type="hidden" name="alamat" value="<?php echo $alamat; ?>">
             <input type="hidden" name="kode_pos" value="<?php echo $kode_pos; ?>">
             <input type="hidden" name="jam_buka" value="<?php echo $jam_buka; ?>">
             <input type="hidden" name="provinsi" value="<?php echo $provinsi; ?>">
             <input type="hidden" name="telepon" value="<?php echo $telepon; ?>">
             <input type="hidden" name="divisi" value="<?php echo $divisi; ?>">
             <input type="hidden" name="need_person" value="<?php echo $need_person; ?>">

              <img src= <?php echo $img;?> class="card-img-top" alt="Gambar">
              <div class="card-body">
               <h5 class="card-title">Recomended For You</h5>
               <a href="halamaninfo.php?id=<?php echo $id?>" class="text-primary"><?php echo $nama_perusahaan;?></h6></a>
              </div>
              <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
             
              </div>
              <button type="submit" class="btn btn-info ">Edit</button>
            </div>
            
          </div>

          <?php endwhile;?>
        </div>
      </div>
      <!--Pt Akhir-->

      <!--Pt lanjutan Akhir-->


 <!-- Footer -->
 
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Pra Magang</h5>
        <p>Ini adalah sebuah web yang menyediakan jembatan untuk para mahasiswa
          maupun mahasiswi untuk mencari tempat magang sesuai yang merekan dambakan
        </p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">About:</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Tentang Kami</a>
          </li>
          <li>
            <a href="#!">Blog</a>
          </li>
          <li>
            <a href="#!">FAQ</a>
          </li>
          <li>
            <a href="#!">Syarat & Ketentuan</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Kontak:</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Instagram</a>
          </li>
          <li>
            <a href="#!">Email</a>
          </li>
          <li>
            <a href="#!">Twitter</a>
          </li>
          <li>
            <a href="#!">Whatshapp</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© Copyright by:
    <a href="https://mdbootstrap.com/"> 18111035_DelianaRahmaAzahra_Mahasiswa_TIF RP 18 CID A</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>

</html>
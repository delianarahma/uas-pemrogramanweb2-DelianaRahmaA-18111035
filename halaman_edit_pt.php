<?php
session_start();
$id = $_POST['id'];
$img = $_POST['image'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$alamat = $_POST['alamat'];
$kode_pos = $_POST['kode_pos'];
$jam_buka = $_POST['jam_buka'];
$provinsi = $_POST['provinsi'];
$telepon = $_POST['telepon'];
$divisi = $_POST['divisi'];
$need_person = $_POST['need_person'];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/csslogin.css">

    <title>Tambah Pt, world!</title>
  </head>
  <body>
      <!--Navbar awal-->
    <header>
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light ">
              <a class="navbar-brand" href="#">
                <img src="https://mpng.subpng.com/20180709/uxw/kisspng-picsart-photo-studio-logo-android-picsart-logo-5b44005bb95c22.7032920515311831957592.jpg" 
                width="50" height="50" alt="Pra Magang">
                Pra Magang
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a rel="styleheet" class="btn btn-outline-primary my-2 my-sm-0" href="halamaninfo.php" role="button">KELUAR</a>
                </li>
            </ul>
            
            </nav>
        </div>
    </header>
    <!--Navbar akhir-->

     <!-- Awal Konten -->
     <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-md-6 mb-4 "> <!--Awal Colom 8-->
             <div class="card">
                 <div class="card-body">
                     <div class="alert alert-success" role="alert">
                     <h2>Pra Magang!</h2>
                       </div>
                       <div class="card">
                        <div class="card-body bg-light">
                          <h5> Yuk, Tambahkan Perusahaan</h5>
                          <p>Silahkan isi data dibawah ini dengan benar!</p>
                          </div>
                          <form action="config/edit_pt.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Image</label>
                              <input type="text" class="form-control" name=image id="exampleInputEmail1" aria-describedby="emailHelp"
                              placeholder="Masukkan Url Image Pt" value="<?php echo $img; ?>">
                            </div>

                            <div class="form-group">
                              <label for="nama">Nama Perusahaan</label>
                              <input type="text" class="form-control" name=nama_perusahaan id="exampleInputPassword1"
                              placeholder="Masukkan Nama Perusahaan" value="<?php echo $nama_perusahaan; ?>">
                            </div>

                            <div class="form-group">
                              <label for="nama">Alamat</label>
                              <input type="text" class="form-control" name=alamat  id="exampleInputPassword1"
                              placeholder="Masukkan Alamat Pt" value="<?php echo $alamat; ?>">
                            </div>
                            <div class="form-group">
                              <label for="nama">Kode Pos</label>
                              <input type="text" class="form-control" name=kode_pos id="exampleInputPassword1"
                              placeholder="Masukkan Kode Pos" value="<?php echo $kode_pos; ?>">
                            </div>
                          
                            <div class="form-group">
                              <label for="nama">Jam Buka</label>
                              <input type="text" class="form-control" name=jam_buka id="exampleInputPassword1"
                              placeholder="Jam Buka Pt" value="<?php echo $jam_buka; ?>">
                            </div>

                            <div class="form-group">
                              <label for="nama">Provinsi</label>
                              <input type="text" class="form-control" name=provinsi id="exampleInputPassword1"
                              placeholder="Masukan Provinsi Perusahaan" value="<?php echo $provinsi; ?>">
                            </div>

                            <div class="form-group">
                              <label for="nama">Telepon</label>
                              <input type="text" class="form-control" name=telepon id="exampleInputPassword1"
                              placeholder="Masukkan Telepon Pt" value="<?php echo $telepon; ?>">
                            </div>

                            <div class="form-group">
                              <label for="nama">Divisi</label>
                              <input type="text" class="form-control" name=divisi id="exampleInputPassword1"
                              placeholder="Masukkan Divisi Yg Tersedia" value="<?php echo $divisi; ?>">
                            </div>

                            <div class="form-group">
                              <label for="nama">Need Person</label>
                              <input type="text" class="form-control" name=need_person id="exampleInputPassword1"
                              placeholder="Lowongan untuk Berapa Orang" value="<?php echo $need_person; ?>">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <button type="reset" class="btn btn-danger my-2 my-sm-0">Reset</button>
                           
                           
                        </form>
                        
                 </div>
               </div>
            </div><!--Akhir Colom 8-->

            <article>
            <div class="col-md-6 mb-4 "><!--Awal Colom 4-->
                    

                </div>
              </article>
              </div>
              </div>
              </div>
              

                              
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
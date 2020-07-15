<?php 
include ('dara/koneksi.php');
 $id_objek=$_GET['id_objek'];
   $sql= mysqli_query($con,"SELECT * FROM objek WHERE id_objek='$id_objek'");
   $tampil= mysqli_fetch_array($sql);
   $id_objek = $tampil['id_objek'];
    $nama_objek   =   $tampil['nama_objek'];
       $deskripsi   =   $tampil['deskripsi'];
              $gambar   =   $tampil['gambar'];
               $maps   =   $tampil['maps'];
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>GoWisata</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index_login.php">GoWisata</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

<div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
       <li class="nav-item"><a href="index_login.php" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kota Wisata</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                       <?php 

    $sql=mysqli_query($con,"SELECT * FROM kota");
    if(isset($_POST['qcari'])){
      $qcari = $_POST['qcari'];
    $sql=mysqli_query($con,"SELECT * FROM kota where id_kota like 
      '%$qcari%' or  like '%$qcari%'");
    }
    $nomor = 0;
    while ($row= mysqli_fetch_array($sql)){
      $nomor++;

    ?> 
                  <a class="dropdown-item" href="kota_login.php?id_kota=<?php echo $row['id_kota']?>"><?php echo $row['nama_kota'] ?></a>
                  <?php  }?>  </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Objek Wisata</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                   <?php 

    $sql=mysqli_query($con,"SELECT * FROM objek");
    if(isset($_POST['qcari'])){
      $qcari = $_POST['qcari'];
    $sql=mysqli_query($con,"SELECT * FROM objek where id_kota like 
      '%$qcari%' or  like '%$qcari%'");
    }
    $nomor = 0;
    while ($row= mysqli_fetch_array($sql)){
      $nomor++;

    ?> 
                  <a class="dropdown-item" href="objek_login.php?id_objek=<?php echo $row['id_objek']?>"><?php echo $row['nama_objek'] ?></a>
                  <?php  }?>
                   </div>     </li>
            <li class="nav-item"><a href="riwayat.php" class="nav-link">Transaksi</a></li>
          <li class="nav-item cta"><a href="index.php" class="nav-link"><span>LogOut</span></a></li>

        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <!-- <div class="js-fullheight"> -->
   


    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2><?php echo $nama_objek ?></h2>
              <p><?php echo $deskripsi ?></p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-6">
                  <form action="#" class="subscribe-form">
                    <div class="form-group">
                      <span class="icon icon-map-marker"></span>
   <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="<?php echo $maps ?>" class="btn btn-primary btn-outline-white px-5 py-3">Maps</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
    
        <div class="row">
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="pembayaran.php" class="image" style="background-image: url('gambar/<?php echo $gambar ?>'); " data-scrollax=" properties: { translateY: '-20%'}">
            </a>
            <div class="text" style="
    width: 1000px;
">
              <h4 class="subheading">Jawa Barat</h4>
              <h2 class="heading"><a href="pembayaran.php"><?php echo $nama_objek ?></a></h2>
              <p><?php echo $deskripsi ?></p>
              <p><a href="pembayaran.php?id_objek=<?php echo $id_objek ?>" class="btn btn-primary px-4">Pesan Tiket</a></p>
            </div>
          </div>
        
        </div>
      

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/particle.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
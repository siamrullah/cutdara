<?php 
include ('dara/koneksi.php');
include ('dara/sesi.php');
  $id_objek=$_GET['id_objek'];
$sql= mysqli_query($con,"SELECT * FROM objek WHERE id_objek='$id_objek'");
     $tampil= mysqli_fetch_array($sql);
    
     $nama_objek = $tampil['nama_objek'];
   $harga = $tampil['harga'];
   $alamat_objek = $tampil['alamat_objek'];
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
<script src="js/jquery.js"></script>
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
                  <a class="dropdown-item" href="kota.php?id_kota=<?php echo $row['id_kota']?>"><?php echo $row['nama_kota'] ?></a>
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


    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
         
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-6">
                  <form action="#" class="subscribe-form">
                    <div class="form-group">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
       <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
         </div>
        <div class="row block-9">
          <div class="col-md-12 pr-md-5">
            <form method="post" action="eksekusi_bayar.php" enctype="multipart/form-data" >

               <input type="hidden" class="form-control" name="id_user" value="<?php echo $id ;?>">
<input type="hidden" class="form-control" name="id_objek" value="<?php echo $id_objek ;?>">

              <div class="form-group">
              <a style="
    color: black;
">Nama Pemesan: <?php echo $nama ;?></a>
<p> </p>
<a style="
    color: black;
">Objek Wisata: <?php echo $nama_objek ;?> </a>                <input type="hidden" class="form-control" name="nama_pemesan" value="<?php echo $nama ;?>" readonly="">
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" name="nama_objek" value="<?php echo $nama_objek ;?>" readonly="">
              </div>
               
                <input type="hidden" class="form-control" name="alamat_objek" value="<?php echo $alamat_objek ;?>">
              
                <input type="hidden" class="form-control" name="tanggal_pemesanan" value="<?php
echo "" . date("Y-m-d h:i:sa") . "";
?>">
                <input type="hidden" class="form-control" name="status" value="0">
              <input type="hidden" name="harga" value="<?php echo $harga ;?>" >
               <label>Harga</label>
              <div class="form-group">
                <input type="text" class="form-control"  id="harga"  value="<?php echo $harga ;?>" disabled>
              </div>
                <label>Tentukan Tanggal Keberangkatan</label>
              <div class="form-group">
                <input type="date" class="form-control" name="tanggal_keberangkatan" style="
    width: 180px;
" required="">
              </div>
               <label>Jumlah Pemesan</label>
              <div class="form-group">
                <input type="text" step="any" min="0" class="form-control" id="volume" name="jumlah_pemesanan" placeholder="Jumlah Pengunjung" >
              </div>
                <label>Total</label>
               <div class="form-group">
                <input type="text" class="form-control" id="jumlah" name="total" placeholder="Total" style="
    width: 180px;
" readonly="">
              </div>
             <label>Pembayaran</label>
               <div class="form-group">
                <a style="
    color: black;
">syarat pembayaran: <br>1.Anda dapat transfer nominal sesuai total harga yang tersedia<br>2.Masukan No.rekening <img src="images/mandiri.png" style="
    height: 25px;
"> 0833293392</a>
<p> </p>
                <input type="file" name="bukti_pembayaran" class="form-control"  required="">

              </div>
          

<script type="text/javascript">
 $("#volume").keyup(function(){
 total = $("#volume").val()* $("#harga").val();
 $("#jumlah").val(total);
 });
 
$("#harga").keyup(function(){
 total = $("#volume").val()* $("#harga").val();
 $("#jumlah").val(total);
 });
 
</script> 
             
              <div class="form-group">
                <input type="submit" name="bayar" value="Pesan Sekarang" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </section>
    
  

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

  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<?php 
include ('../../dara/koneksi.php');
$id_pembayaran=$_GET['id_pembayaran'];
   $sql= mysqli_query($con,"SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
   $tampil= mysqli_fetch_array($sql);
   $id_pembayaran = $tampil['id_pembayaran'];
   $status = $tampil['status'];
?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Edit Transaksi
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          GoWisata ADM
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">person</i>
              <p>Lihat User</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./kota.php">
              <i class="material-icons">location_city</i>
              <p>Tambah Kota</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="./objek.php">
              <i class="material-icons">emoji_transportation</i>
              <p>Tambah Objek</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./transaksi.php">
              <i class="material-icons">attach_money</i>
              <p>Transaksi</p>
            </a>
          </li>
                 <li class="nav-item ">
            <a class="nav-link" href="./transaksi.php">
              <i class="material-icons">logout</i>
              <p>Keluar</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Edit Status Pembayaran</a>
           </div>
                 </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Status Pembayaran</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form method="post" action="eksekusi_edit_bayar.php"  enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cara mengisi field : 1 = pembayaran selesai || 0 = pembayaran belum selesai</label>
                             <input type="hidden" name="id_pembayaran" class="form-control" value="<?php echo $id_pembayaran ?>">
                          <input type="text" name="status" class="form-control" value="<?php echo $status ?>">
                   </div>     </div>
                      
</div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" name="edit">Update Status</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
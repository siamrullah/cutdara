<?php include ('koneksi.php');
include('sesi.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AmazeShoes </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

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
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index1.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
     
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shoes</a>
               <div class="dropdown-menu" aria-labelledby="dropdown04">
                   		<?php 

		$sql=mysqli_query($con,"SELECT * FROM kategori");
		if(isset($_POST['qcari'])){
		  $qcari = $_POST['qcari'];
		$sql=mysqli_query($con,"SELECT * FROM kategori where id_kategori like 
		  '%$qcari%' or  like '%$qcari%'");
		}
		$nomor = 0;
		while ($row= mysqli_fetch_array($sql)){
		  $nomor++;

		?> 
                <a class="dropdown-item"  href='shop?id_kategori=<?php echo $row['id_kategori']?>'><?php echo $row['nm_kategori'] ?></a>	<?php  }?>
                </a>
              </div>
            </li>

	          <li class="nav-item"><a href="pembayaran.php" class="nav-link"><img src="images/cart.png" style="
    height: 25px;
"></a></li>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                    <li class="nav-item"><a  class="nav-link"  onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black"><img src="images/wish.png" style="
    height: 25px;
"></a></li>

     <li class="nav-item"><a href="transaksi11.php" class="nav-link">Transaksi</a></li>
     <li class="nav-item"><a href="index.php" class="nav-link">Keluar</a></li>

              <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <div class="w3-container">

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        
 <h4 class="title">Data Transaksi :</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th style="
    width: 100px;
">No</th>
                                        <th style="
    width: 100px;
"> </th>
                                        <th style="
    width: 100px;
">Gambar</th>

                                        <th style="
    width: 100px;
">Nama Produk</th>
                                        <th style="
    width: 100px;
">Harga</th>
                                    </thead>
                                    <tbody>
                                       <?php 


    $sql=mysqli_query($con,"SELECT * FROM keep where id = $id ");
if(isset($_POST['qcari'])){
  $qcari = $_POST['qcari'];
$sql=mysqli_query($con,"SELECT * FROM keep where id_keep like 
  '%$qcari%' or judul like '%$qcari%'");
}
$nomor = 0;
while ($row= mysqli_fetch_array($sql)){
  $nomor++;

  echo"<tr>";?>
                        </td>     
                               <td style="
    width: 100px;
" >
                        <?php echo $nomor;?>    
                                <td style="
    width: 100px;
">
                                            <a href='cartwish.php?id_keep=<?php echo $row['id_keep']?>'>
                                          <i href="" class="btn btn-xs btn-primary"><i class="fa fa-cart-plus"></i></i> |
                                           <a href='hapus_keep.php?id_keep=<?php echo $row['id_keep']?>'>
                                          <i href="" class="btn btn-xs btn-danger"><i class="fa fa-eraser"></i></i>    |
                        <td style="
    width: 100px;
"><img src="img/<?php echo $row['gambar_produkw'];?>"  style="
    width: 70px;
    height: 70px;
">
                 
                
                         <td style="
    width: 100px;
" ><?php echo $row['nama_barangw']?></td>

                       <td style="
    width: 100px;
"><?php echo $row['harga_tetapw']?>K</td>
                                                                         
 <?php
}

 ?>
                       </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

</div>
	  </nav>
    <!-- END nav -->
		
		<div class="hero-wrap js-fullheight" style="background-image: url('images/bisachuy.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        	<h3 class="v">AmazeShoes - Time to get Shoes</h3>
          <div class="col-md-11 ftco-animate text-center">
            <h1 style="
    color: #8e8e66;
"> AmazeShoes</h1>
            <h2><span style="
    color: 8e8e66;
">Choose Your Shoes</span></h2>
          </div>
          <div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
						</a>
					</div>
        </div>
      </div>
    </div>

<body>


    <div class="goto-here"></div>
    
    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">All Products</h2>

          </div>
        </div>  	</div>	
    	<div class="container-fluid">
    		<div class="row">
    			<?php 
		$sql=mysqli_query($con,"SELECT * FROM brand");
		if(isset($_POST['qcari'])){
		  $qcari = $_POST['qcari'];
		$sql=mysqli_query($con,"SELECT * FROM brand where id_brand like 
		  '%$qcari%' or  like '%$qcari%'");
		}
		$nomor = 0;
		while ($row= mysqli_fetch_array($sql)){
		  $nomor++;

		?> 
    			<div class='col-sm col-md-6 col-lg-3 ftco-animate'>
    				<div class='product'>
    					<a href="product-single.php?id_brand=<?php echo $row['id_brand']?>" class="img-prod"><img class="img-fluid" src="img/<?php echo $row['gambar'] ?>" alt="Colorlib Template" style="width: 365px;height: 300px;" ></a>
    					<div class="text py-3 px-3">
    					<p class="price"><span><?php echo $row ['nama_brand']?></span></p>
                 <p><?php echo $row['jenis']?></p>
          
    						<div class="d-flex">
    								<div class='pricing'>
		    				<p class='price'><span class='mr-2 price-dc'><?php echo $row['harga_asli']?></span><span class='price-sale'><?php echo $row['harga']?></span></p>	</div>
		    					 
                  <div class="rating">
<span></span>

    <form action="bikinkeep.php" method="post" >

 <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?php echo $id ;?>" readonly>
              </div>
               <div class="form-group">
                <input type="hidden" class="form-control" name="nama_lengkapw" value="<?php echo $nama ;?>" readonly>
              </div>
               <div class="form-group">
                <input type="hidden" class="form-control" name="alamatw" value="<?php echo $alamat ;?>" readonly>
              </div>
               <div class="form-group">
                <input type="hidden" class="form-control" name="no_hpw" value="<?php echo $hp ;?>" readonly>
              </div>
               <div class="form-group">
                <input type="hidden" class="form-control" name="nama_barangw" value="<?php echo $row ['nama_brand']?>" readonly>
              </div>
               <div class="form-group">
                <input type="hidden" class="form-control" name="id_barang" value="<?php echo $row ['id_brand']?>" readonly>
              </div>
               <div class="form-group">
                <input type="hidden" class="form-control" name="gambar_produkw" value="<?php echo $row ['gambar']?>" readonly>
              </div>
                <div class="form-group">
                <input type="hidden" class="form-control" name="sizew" value="<?php echo $row ['ukuran']?>" readonly>
              </div>
                      <div class="form-group">
                <input type="hidden" class="form-control" name="jenisw" value="<?php echo $row ['jenis']?>" readonly>
              </div>

 <div class="form-group">
                <input type="hidden" class="form-control" name="harga_tetapw" value="<?php echo $row ['harga']?>" readonly>
              </div>

<p class="text-center"> <a href='pembayaran.php'> <button type="submit" name="wishlist" class="btn btn-primary py-3 px-4" style="
    margin-top: -345px;
"><img src="images/wish.png" style="
    height: 20px;
    width: 25px;
"></button>
 

                  </div>
                </div>
	<hr>
  </FORM>

    						<p class="bottom-area d-flex">
    							<a href="cart.php?id_brand=<?php echo $row['id_brand']?>"><span>ORDER NOW <i class="fa fa-cart-plus"></i></span><i class="ion-ios-add ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    			<?php
}

 ?>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


		
    <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            		
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a  target="_blank">amazeshoes</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>


     
  
    </footer>
    


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
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
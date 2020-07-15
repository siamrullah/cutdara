<?php include ('../koneksi.php');
include('../sesi.php'); 
	 $id_brand=$_GET['id_brand'];
	 $sql= mysqli_query($con,"SELECT * FROM brand WHERE id_brand='$id_brand'");
	 $tampil= mysqli_fetch_array($sql);
	 $id = $tampil['id_brand'];
		$gambar 	= 	$tampil['gambar'];
		$jenis  =	$tampil['jenis'];
$nama_brand 	= 	$tampil['nama_brand'];
		$harga  =	$tampil['harga'];
			$deskripsi  =	$tampil['deskripsi'];
		

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" type="image/png" href="../warm.png">
<title>GamingGear</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="../logoasli.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
<div class="menu_nav">
		<ul>
		<li class="active">	<li><a href="barang">HOME</a></li>
<li>		<a href="aksesoris">AKSESORIS</a></li>
						<li><a href="tshirt">TSHIRT</a></li>
								<li><a href="pants">PANTS</a></li>
								 <li><a href="outwear">OUTWEAR</a></li>
						
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">

		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
		
			<div>+62 817-0033-672</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="https://www.facebook.com/GamingGearindonesia/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="https://www.youtube.com/channel/UCd7fSwvbnGrya7F9yE68zog"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
										<li><a href="https://api.whatsapp.com/send?phone=628170033672&text=Saya%0 ingin%0bertanya"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
										<li><a href="https://instagram.com/GamingGear_id?igshid=kn49uwq1wpvc"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/logo_1.png" alt="" style="
    width: 48px;
"></div>
						<div>GamingGear</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="#">Women</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Kids</a></li>
					<li><a href="#">Home Deco</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Search Item" required="required">
						<button class="header_search_button"><img src="images/search.png" alt=""></button>
					</form>
				</div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
					<div>+62 817-0033-672</div>
				</div>
			</div>
		</div>
	</header>
			<!-- Home Slider -->

		<!-- Products -->
                    
		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
					
					</div>
				</div>
				<div class="row page_nav_row">
					<div class="col">
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-center">
								<li class="active"><a href="#">DETAIL PRODUK</a></li>
							
							</ul>
						</div>
					</div>
				</div>
				<div class="row products_row">
				
	

					<!-- Product -->
	<div class="product">
			<div class="container">
				<div class="row">
					
					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="product_image_slider_container">
							<div id="slider" class="flexslider">
								<ul class="slides">
									<li>
										<img src="../img/<?php echo $gambar  ;?>"</div>
									</li>
								</ul>
							</div>
							<div class="carousel_container">
								<div id="carousel" class="flexslider">
									<ul class="slides">
										
										</li>
									</ul>
								</div>
								</div>
						</div>
					</div>

					<!-- Product Info -->
					<div class="col-lg-6 product_col">
						<div class="product_info">
							<div class="product_name"><a><?php echo $nama_kota ;?></a></div>
							<div class="active"><?php echo $jenis ;?></a></div>
							<div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
								<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="product_reviews_link"><a href="#">Reviews</a></div>
							</div>
							<div class="product_price">Rp.<?php echo $harga ;?><span></span></div>
						<div>
							</div>
							<div class="product_text">
								<p><?php echo $deskripsi ;?></p>
							</div>
					<a href='pembayaran?id_brand=<?php echo $id_brand ;?>'><span class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center" >
											<div><div><img src="images/cart.svg" class="png" alt=""><div>+</div></div></div>
				</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Boxes -->

	
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> GamingGear</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
								
							</div>
					
				</div>
			</div>
		</footer>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
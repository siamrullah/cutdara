<?php 
include ('dara/koneksi.php');
?>
<!DOCTYPE html>
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
      <a class="navbar-brand" href="index.html">GoWisata</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
       <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                  
          <li class="nav-item cta"><a href="Login_v5/index.php" class="nav-link"><span>Login</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <!-- <div class="js-fullheight"> -->
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Ayo Kunjungi <strong>Objek Wisata</strong> Jawa Barat</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="Login_v5/index.php" class="btn btn-primary btn-outline-white px-5 py-3">Login</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="bg-light">
    <section class="ftco-section-featured ftco-animate">
      <div class="container-fluid" data-scrollax-parent="true">
        <div class="row no-gutters d-flex align-items-center" data-scrollax=" properties: { translateY: '-30%'}">

          <div class="col-md-3 mb-3">
            <a href="https://www.google.co.id/maps/place/Farm+House+Susu+Lembang/@-6.832921,107.6040073,17.5z/data=!4m5!3m4!1s0x2e68e13bbef5ad89:0x356bebed022b2371!8m2!3d-6.8329716!4d107.6057215" class="featured-img">
              <div class="text-1 p-4 d-flex align-items-center">
                <h3>Bandung<br><span class="tag">Farm House</span></h3>
              </div>
              <img src="gambar/farmhouse1.jpg" class="img-fluid" alt="">
              <div class="text p-4 d-flex align-items-center">
                <div class="user d-flex align-items-center">
                  <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                </div>
              </div>
            </a>
          </div>
          
          <div class="col-md-6">
            <div class="row no-gutters">
              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-end">

                  <div class="col-md-8">
                    <a href="https://www.google.co.id/maps/place/Kawah+Putih/@-7.166154,107.4010453,18z/data=!3m1!4b1!4m5!3m4!1s0x2e688c1383dc510f:0xfab41bb8e4a3a83e!8m2!3d-7.1662039!4d107.4021256" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Bandung<br><span class="tag">Kawah Putih</span></h3>
                      </div>
                      <img src="gambar/kawahputih2.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-md-4">
                    <a href="https://www.google.co.id/maps/place/Taman+Bunga+Nusantara/@-6.7271934,107.0798678,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69b3e586b6266d:0x1c9b14260d4319ab!8m2!3d-6.7271987!4d107.0820565" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Bogor<br><span class="tag">Taman Bunga Nusantara</span></h3>
                      </div>
                      <img src="gambar/taman_bunga1.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                        </div>
                      </div>
                    </a>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-12">
                <div class="row no-gutters d-flex align-items-start">
                  <div class="col-md-8">
                    <a href="https://www.google.co.id/maps/place/Little+Venice+Kota+Bunga/@-6.6939981,107.0392316,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69b164db92a9ed:0x2945190fdfa7a3a!8m2!3d-6.6940034!4d107.0414203" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Bogor<br><span class="tag">Little Venice</span></h3>
                      </div>
                      <img src="gambar/little_venice1.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4">
                    <a href="https://www.google.co.id/maps/place/HIdden+Valley+Hills/@-6.6342657,107.4179569,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6905bb399d1beb:0xb7d7a47a3b2db974!8m2!3d-6.634271!4d107.4201456" class="featured-img">
                      <div class="text-1 p-4 d-flex align-items-center">
                        <h3>Purwakarta<br><span class="tag">Hidden Valley Hills</span></h3>
                      </div>
                      <img src="gambar/hidden_valley2.jpg" class="img-fluid" alt="">
                      <div class="text p-4 d-flex align-items-center">
                        <div class="user d-flex align-items-center">
                          <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <a href="https://www.google.co.id/maps/place/Resort+Giri+Tirta+Kahuripan/@-6.6339783,107.533342,17z/data=!3m1!4b1!4m8!3m7!1s0x2e691a508ba632d5:0xa93070b9565c795d!5m2!4m1!1i2!8m2!3d-6.6339836!4d107.5355307" class="featured-img">
              <div class="text-1 p-4 d-flex align-items-center">
                <h3>Purwakarta<br><span class="tag">Giri Tirta Kahuripan</span></h3>
              </div>
              <img src="gambar/giri_tirta4.jpg" class="img-fluid" alt="">
              <div class="text p-4 d-flex align-items-center">
                <div class="user d-flex align-items-center">
                  <div class="user-img mr-3" style="background-image: url(images/person_1.jpg);"></div>
                </div>
              </div>
            </a>
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
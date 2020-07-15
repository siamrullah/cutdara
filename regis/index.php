<?php
include('../dara/koneksi.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title >Pendaftaran</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<form method="post" action="aksi.php" enctype="multipart/form-data">
<body>

    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Pendaftaran</h2>
                </div>
                <div class="card-body">
                    
                        <div class="form-row">
						
                            <div class="name">Full Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nama" placeholder="Masukkan Full Name">
                            </div>
                            </div>
                         <div class="form-row">
                            <div class="name">No HP</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="no_hp" name="no_hp" placeholder="Masukkan No HP">
                                </div>
                            </div>
                            </div>
                           <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="alamat" placeholder="Masukkan Alamat">
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="name">Gmail</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="gmail" placeholder="Masukkan Gmail">
                            </div>
                          <div class="form-row">
                            <div class="value">
                                <input type="hidden" class="input--style-6" type="text" name="akses" value="usr">
                            </div>

                               <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="username" placeholder="Masukkan Username">
                            </div>
                        </div>
                               <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <input class="input--style-6" type="password" name="password" placeholder="*******">
                            </div>
                        </div>
                        </div>
                      
                    
                        
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
				 <button class="btn btn--radius-2 btn--blue-2" type="submit" name="tambah-data">DAFTAR</button> </a> <div class="
                 button button_clear trans_200">
                 </div>
                 </div>
                 <a href="../index.html"></a></div>

                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
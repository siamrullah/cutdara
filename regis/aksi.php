<?php 
include('../dara/koneksi.php');
if (isset($_POST['tambah-data'])) {
	$nama			=	$_POST['nama'];
	$no_hp			=	$_POST['no_hp'];
	$alamat			=	$_POST['alamat'];

	$gmail			=	$_POST['gmail'];
	$username		= $_POST['username'];
	$password		= MD5($_POST['password']);
	$akses			= $_POST['akses'];
$vlampiran		=$_FILES['gambar']['name'];
	$tlampiran		=$_FILES['gambar']['tmp_name'];
	$dir			="../img/";
	$sql= mysqli_query($con,"insert into user (id,nama,no_hp,alamat,username,gmail,password,akses,gambar) values ('','$nama','$no_hp','$alamat','$username','$gmail','$password','$akses','$vlampiran')");
	if ($sql==true) {
		header("Location: ../Login_v5/index.php?success");
	}
else{
	echo "Query Insert Gagal";
}
}
?>

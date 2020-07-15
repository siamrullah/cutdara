<?php
session_start(); 
include('../../dara/koneksi.php');
if (isset($_POST['po'])) {

 $nama_kota   = $_POST ['nama_kota'];
 $deskripsi   = $_POST ['deskripsi'];
$vlampiran		=$_FILES['gambar']['name'];
	$tlampiran		=$_FILES['gambar']['tmp_name'];
	$dir			="../../gambar/";
	$sql= mysqli_query($con,"insert into kota (nama_kota,deskripsi,gambar) values ('$nama_kota','$deskripsi','$vlampiran')");
	$go=mysqli_query($con,$sql);
$upload			=$dir.$vlampiran;
move_uploaded_file($tlampiran, $upload);
	if ($sql==true) {
		header("Location: kota.php?success"); 
	}
else{
	echo "Query Insert Gagal";
}
}
?>
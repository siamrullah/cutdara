<?php
session_start(); 
include('../koneksi.php');
if (isset($_POST['tambah-data-lagi'])) {
		$id_barang	=	$_POST['id_barang'];
	$store			=	$_POST['store'];
	$judul			=	$_POST['judul'];
		$vlampiran		=$_FILES['gambar']['name'];
	$tlampiran		=$_FILES['gambar']['tmp_name'];
	$dir			="../img/";
	$sql= mysqli_query($con,"insert into tb_barang (id_barang,store,judul,gambar) values ('','$store','$judul','$vlampiran')");
	$go=mysqli_query($con,$sql);
$upload			=$dir.$vlampiran;
move_uploaded_file($tlampiran, $upload);
	if ($sql==true) {
		header("Location: tambahbarang.php?success");
	}
else{
	echo "Query Insert Gagal";
}
}
?>

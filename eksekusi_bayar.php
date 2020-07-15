<?php
session_start(); 
include('dara/koneksi.php');
if (isset($_POST['bayar'])) {
$id_user		=	$_POST['id_user'];
$id_objek		=	$_POST['id_objek'];
$alamat_objek		=	$_POST['alamat_objek'];
$nama_pemesan		=	$_POST['nama_pemesan'];
$jumlah_pemesanan		=	$_POST['jumlah_pemesanan'];
$harga				=	$_POST['harga'];
$status				=	$_POST['status'];
$tanggal_pemesanan		=	$_POST['tanggal_pemesanan'];
$tanggal_keberangkatan		=	$_POST['tanggal_keberangkatan'];
$total				=	$_POST['total'];
$nama_objek				=	$_POST['nama_objek'];
$vlampiran		=$_FILES['bukti_pembayaran']['name'];
	$tlampiran		=$_FILES['bukti_pembayaran']['tmp_name'];
	$dir			="images/";
 
	$sql= mysqli_query($con,"insert into pembayaran (id_user,id_objek,alamat_objek,nama_pemesan,jumlah_pemesanan,harga,status,tanggal_pemesanan,tanggal_keberangkatan,total,nama_objek,bukti_pembayaran) values ('$id_user','$id_objek','$alamat_objek','$nama_pemesan','$jumlah_pemesanan','$harga','$status','$tanggal_pemesanan
		','$tanggal_keberangkatan','$total','$nama_objek','$vlampiran')");
	$go=mysqli_query($con,$sql);
	$upload			=$dir.$vlampiran;
move_uploaded_file($tlampiran, $upload);
	if ($sql==true) {
		header("Location: riwayat.php?success"); 
	}
else{
	echo "Query Insert Gagal";
}
}
?>


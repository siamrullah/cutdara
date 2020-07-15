<?php
session_start(); 
include('../../dara/koneksi.php');
if (isset($_POST['tambah-objek'])) {
 $nama_objek   = $_POST['nama_objek'];
 $alamat_objek   = $_POST['alamat_objek'];
 $id_kota   = $_POST['id_kota'];
 $harga   = $_POST['harga'];
 $maps   = $_POST['maps'];
  $vlampiran		=$_FILES['gambar']['name'];
	$tlampiran		=$_FILES['gambar']['tmp_name'];
	$dir			="../../gambar/";
 $deskripsi   = $_POST['deskripsi'];

 $sql= mysqli_query($con,"insert into objek (id_objek,nama_objek,alamat_objek,id_kota,harga,maps,gambar,deskripsi) 
 	values
  						('','$nama_objek','$alamat_objek','$id_kota','$harga','$maps','$vlampiran','$deskripsi')");
 	$go=mysqli_query($con,$sql);
$upload			=$dir.$vlampiran;
move_uploaded_file($tlampiran, $upload);
	if ($sql==true) {
  header("Location: objek.php?success");
 }
else{
 echo "Query Insert Gagal";
}
}
?>
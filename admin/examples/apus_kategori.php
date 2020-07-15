<?php
session_start();
include "../koneksi.php";

$id_produk = $_GET['id_produk'];

$query = mysqli_query($con,"DELETE FROM pesanan where id_produk='$id_produk'") or die(mysql_error());
	
if ($query) {

    header('location:kategori.php?sucsess');
}
?>
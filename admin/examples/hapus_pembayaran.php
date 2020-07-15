<?php
session_start();
include "../../dara/koneksi.php";

$id_pembayaran = $_GET['id_pembayaran'];

$query = mysqli_query($con,"DELETE FROM pembayaran where id_pembayaran='$id_pembayaran'") or die(mysql_error());
	
if ($query) {

    header('location:transaksi.php?sucsess');
}
?>
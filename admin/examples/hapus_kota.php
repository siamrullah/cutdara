<?php
session_start();
include "../../dara/koneksi.php";

$id_kota = $_GET['id_kota'];

$query = mysqli_query($con,"DELETE FROM kota where id_kota='$id_kota'") or die(mysql_error());
	
if ($query) {

    header('location:kota.php?sucsess');
}
?>


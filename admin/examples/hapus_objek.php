<?php
session_start();
include "../../dara/koneksi.php";

$id_objek = $_GET['id_objek'];

$query = mysqli_query($con,"DELETE FROM objek where id_objek='$id_objek'") or die(mysql_error());
	
if ($query) {

    header('location:objek.php?sucsess');
}
?>
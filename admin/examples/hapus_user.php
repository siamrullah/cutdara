<?php
session_start();
include "../../dara/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($con,"DELETE FROM user where id='$id'") or die(mysql_error());
	
if ($query) {

    header('location:dashboard.php?sucsess');
}
?>
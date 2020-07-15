 <?php
	
	include('../../dara/koneksi.php');
	//-----------------------//
	if (isset($_POST['edit'])) {
		$id_pembayaran = $_POST['id_pembayaran'];
		$status = $_POST['status'];
		
	$query= mysqli_query($con,"UPDATE pembayaran SET id_pembayaran ='$id_pembayaran',status = '$status'
	WHERE id_pembayaran='$id_pembayaran'") or die (mysql_error());			
	
	if ($query) {
		header("Location: transaksi.php?success");
	}
	}
	
?>

 <?php
	
	include('../../dara/koneksi.php');
	//-----------------------//
	if (isset($_POST['edit'])) {
		$id_objek = $_POST['id_objek'];
		$nama_objek = $_POST['nama_objek'];
		$alamat_objek = $_POST['alamat_objek'];
		$harga = $_POST['harga'];
		$maps = $_POST['maps'];
	
	$query= mysqli_query($con,"UPDATE objek SET id_objek ='$id_objek', nama_objek = '$nama_objek', alamat_objek = '$alamat_objek', harga = '$harga', maps = '$maps'
	WHERE id_objek='$id_objek'") or die (mysql_error());			
	
	if ($query) {
		header("Location: objek.php?success");
	}
	}
	
?>


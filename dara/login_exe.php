<?php 
include ('koneksi.php');
if(isset($_POST['login'])) {
	$uname = $_POST['username'];
	$pass = MD5($_POST['password']);
	$sql = mysqli_query($con, "select * from user where username='$uname' && password='$pass'");
	$data = mysqli_fetch_array($sql);
	$row = mysqli_num_rows($sql);

	if($row>0){
		if(!isset($_SESSION)){
			session_start();
		}
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['no_hp'] = $data['no_hp'];
		$_SESSION['alamat'] = $data['alamat'];
		$_SESSION['akses'] = $data['akses'];

		if($data['akses']=='adm'){
			header('Location: ../admin/examples/dashboard.php');
	
		}elseif($data['akses']=='usr'){
			header('Location: ../index_login.php');
		}


	}
}else{
	header('Location: index.php');
} 
?>


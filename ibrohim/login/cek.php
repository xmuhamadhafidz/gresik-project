<?php
include "connection.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];



$login = mysqli_query($db,"SELECT * from accounts where email='$email' and password='$password'");

$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);


 
	if($data['type']=="tu"){
 
	
		$_SESSION['email'] = $email;
		$_SESSION['type'] = "admin";

		header("location:user/tu");
 
	
	}




	else if($data['type']=="sekolah"){
 
	
		$_SESSION['email'] = $email;
		$_SESSION['type'] = "sekolah";

		header("location:user/sekolah");

	}


	else if($data['type']=="madin"){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['type'] = "madin";
		// alihkan ke halaman dashboard pengurus
		header("location:user/madin");



 
	}


	else if($data['type']=="pondok"){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['type'] = "pondok";
		// alihkan ke halaman dashboard pengurus
		header("location:user/pondok");



 
	}


	else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
?>


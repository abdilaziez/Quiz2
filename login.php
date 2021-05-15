<?php
	include "conect.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$get_user = "SELECT * FROM akun WHERE username = '$username'";
	$result = mysqli_query($konek,$get_user);
	
	$data = mysqli_fetch_array($result);
	if($data){

		if($password == $data['password']){
			Header("Location: beranda.html");
		}else{
			Header("Location: login.html");
		}
	}else{
		Header("Location: login.html");
	}
?>
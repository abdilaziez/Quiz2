<?php	
	include "conect.php";

	$username = $_POST['username'];
	$password = ($_POST['password']);
	
	$get_user = "INSERT INTO akun(username, password) VALUES('$username', '$password')";
	$result = mysqli_query($konek,$get_user);
	
	if($result){
		Header("Location:login.html");
	}
?>
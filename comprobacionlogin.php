<?php
	include("database.php");

	$email=$_POST['email'];
	$pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);
	//$pswd=$_POST['pswd'];
	$sql_validation = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$pswd'";
	$result=$conn->query($sql_validation);
	
	if($result->num_rows >0){
		header("Refresh:0;url=index.php");
	}else{
		echo "<script language='javascript'>alert('Invalid user or password')</script>";
		header("Refresh:0;url=login.php");
	}
?>
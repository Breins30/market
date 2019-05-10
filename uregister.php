<?php
    
    include("database.php");

    $firstname=$_POST['uname'];
    $lastname=$_POST['ulastname'];
    $email=$_POST['uemail'];
	
	$photo = "images/img_default.png";
	
	$pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);
	//1. Create query
	$sql_validation = "SELECT * FROM usuarios WHERE email = '$email' ";
	//2. Execute query
	$result=$conn->query($sql_validation);
	//3. Validation
	if($result->num_rows == 0){
		$sql="INSERT INTO usuarios (firstname, lastname,email, password,photo) VALUES('$firstname','$lastname','$email','$pswd','$photo')";
		if ($conn->query($sql)===true) {
			echo "<script language='javascript'>alert('Usuario regisrado con exito')</script>";
			header("Refresh:0;url=login.php");    
		}else{
			echo "Error:".$sql."<br>".$conn->error;
		}
	}else{
		echo "<script language='javascript'>alert('Usuario ya existe')</script>";
		header("Refresh:0;url=login.php");
	}	
	

?>
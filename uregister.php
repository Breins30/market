<?php
    
    include("database.php");

    $firstname=$_POST['uname'];
    $lastname=$_POST['ulastname'];
	$gender = $_POST['gender'];
    $email=$_POST['uemail'];
	
	if($gender=='M'){
		$photo = "images/boy.png";
	}else if($gender=='F'){
		$photo = "images/girl.png";
	}else{
		$photo = "images/img_default.png";
	}
	
	$pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);
	//1. Create query
	$sql_validation = "SELECT * FROM usuarios WHERE email = '$email' ";
	//2. Execute query
	$result=$conn->query($sql_validation);
	//3. Validation
	if($result->num_rows == 0){
		$sql="INSERT INTO usuarios (firstname, lastname,gender,email, password,photo) VALUES('$firstname','$lastname','$gender','$email','$pswd','$photo')";
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
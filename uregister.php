<?php
    
    include("database.php");

    $firstname=$_POST['uname'];
    $lastname=$_POST['ulastname'];
	$id=$_POST['id'];
	$gender = $_POST['gender'];
    $email=$_POST['uemail'];
	$image = basename($_FILES["img"]["name"]);
	$tmp_name = $_FILES["img"]["tmp_name"];
	$status=FALSE;
	$extarray= array("jpeg","jpg","png","gif");
	
	if($image == ""){
		if($gender=='M'){
		$photo = "photos/boy.png";
		}else if($gender=='F'){
		$photo = "photos/girl.png";
		}else{
		$photo = "photos/img_default.png";
		}
		$status=TRUE;
	}else{
		$exploarray = explode('.',$_FILES['img']["name"]);
		$ext=end($exploarray);
		if(in_array($ext,$extarray)&&$_FILES['img']["size"]<=2000000){
			$newname = implode('.', [$id,$ext]);
			move_uploaded_file($tmp_name, "photos/$newname");
			$photo = "photos/$newname";
			$status=TRUE;
		}
	}
	
	$pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);
	//1. Create query
	$sql_validation = "SELECT * FROM usuarios WHERE email = '$email' OR cedula = $id";
	//2. Execute query
	$result=$conn->query($sql_validation);
	//3. Validation
	if($result->num_rows == 0 && $status==TRUE){
		$sql="INSERT INTO usuarios (firstname, lastname,cedula,gender,email, password,photo) VALUES('$firstname','$lastname',$id,'$gender','$email','$pswd','$photo')";
		if ($conn->query($sql)===true) {
			echo "<script language='javascript'>alert('Usuario regisrado con exito')</script>";
			header("Refresh:0;url=login.php");    
		}else{
			echo "Error:".$sql."<br>".$conn->error;
		}
	}else{
		if($status==FALSE){
			echo "<script language='javascript'>alert('La imagen es superior a 2 MB o no tiene el formato indicado')</script>";
			header("Refresh:0;url=signup.php");
		}else{
			echo "<script language='javascript'>alert('Usuario ya existe')</script>";
			header("Refresh:0;url=signup.php");
		}
	}	
	

?>
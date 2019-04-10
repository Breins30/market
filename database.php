
<?php
	//Credenciales de conexion a base de datos
	//127.0.0.1/market/database.php
	
	$username = "root";
	$servername = "127.0.0.1";
	$password = "";
	$dbname = "market";
	
	$conn = new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error){
		//Mensaje de consola
		die("ERROR: ".connect_error);
	}else{
		//die("Conexion exitosa a ".$dbname);
	}
	
?>
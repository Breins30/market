
<?php
	$codigo=$_GET['cod'];
	
	include("database.php");
	$sql = "DELETE FROM productos WHERE codigo_prod = '$codigo'";
	$conn -> query($sql);
	
	echo "<script language='javascript'>alert(':::producto eliminado con exito :::')</script>";
	header ("refresh:0;url='index.php'");

	
?>
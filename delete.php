<?php
    include 'database.php';

    $id=$_GET['id'];
    $cod=$_GET['cod'];
    $sql1 = "SELECT imagen FROM productos WHERE item=$id AND codprod=$cod";
	$conn ->query($sql1);
	$a=$row['imagen'];
	echo "<script languaje='javascript'>alert('$a') </script>";
	unlink($row['imagen']);
    $sql = "DELETE FROM productos WHERE item=$id AND codprod=$cod";

    $conn ->query($sql);
    echo "<script languaje='javascript'>alert('Producto eliminado') </script>";

    header("refresh:0; url=index.php");

    

?>
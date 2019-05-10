<?php

    include "database.php";

    $codigo=$_POST['codigo'];
    $nombre=strtoupper( $_POST['producto']);
    $cantidad=$_POST['cantidad'];
    $costo=$_POST['costo'];
    $imagen=$_POST['foto'];

    $sql="INSERT INTO productos (codprod,nomprod,cantprod,pcosto,imagen)VALUES('$codigo','$nombre',$cantidad,$costo,'$imagen')";

    if ($conn->query($sql)===true) {
        echo "<script languaje='javascript'>alert('Producto regisrado con exito')</script>";
            
    }else{
        echo "Error:".$sql."<br>".$conn->error;
    }

?>
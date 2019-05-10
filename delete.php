<?php
    include 'database.php';

    $id=$_GET['id'];
    $cod=$_GET['cod'];
    
    $sql = "DELETE FROM productos WHERE item=$id AND codprod=$cod";

    $conn ->query($sql);
    echo "<script languaje='javascript'>alert('Producto eliminado')
    </script>";

    header("refresh:0; url=index.php");

    

?>
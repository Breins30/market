<?php
    $servername="localhost";
    $username="root";
    $pass="";
    $DBname="market";

    //create connection to database

    $conn = new mysqli($servername,$username,$pass,$DBname);
    //cheking
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }else{
        //echo "i am connectes to tienda";
    }

?>
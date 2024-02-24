<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db1";

    $conn = mysqli_connect($host,$user,$password,$database);

    if($conn){
        echo "Connected to database ". $database;
    }
    else{
        echo "Could not connect to database";
    }
?>
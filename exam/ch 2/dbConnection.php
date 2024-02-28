<?php
    $host = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host,$username,$password,"examprep");
    $createDb = "create database if not exists examprep";
    $query = mysqli_query($conn,$createDb);

    if($conn){
        // echo "connection established";
        if($query){
            // echo "<br> Database created successfully";
        }
        else{
            echo "Database creation failed";
        }
    }
    else{
        echo "connection failed";
    }
?>
<?php
    // Connection details
    $host = "localhost";
    $user = "root";
    $password = "";

    // Establish connection
    $conn = mysqli_connect($host, $user, $password);

    // Check if connection is successful
    if($conn) {
        echo "Connection established<br>";

        // Create database
        $db_create = "CREATE DATABASE db1";
        $qry = mysqli_query($conn, $db_create);

        // Check if database creation is successful
        if($qry) {
            echo "Database 'db1' created successfully";
        } else {
            echo "Error creating database: " . mysqli_error($conn);
        }
    } else {
        echo "Connection failed: " . mysqli_connect_error();
    }
?>

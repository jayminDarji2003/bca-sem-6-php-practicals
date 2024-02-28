<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "exam";

    $dbCon = mysqli_connect($host,$username,$password,$db);

    if($dbCon){
        // echo "Database connection established<br    >";
    }
    else{
        die("Database connection failed");
    }

    $create_table = "CREATE TABLE IF NOT EXISTS product(
        p_id int(11) primary key auto_increment,
        p_name varchar(100) not null,
        p_price int(11) not null,
        p_desc varchar(255) not null
    )";

    $sql = mysqli_query($dbCon,$create_table);
    if($sql){
        // echo "Table created successfully";
    }
    else{
        die("Could not create table");
    }



    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['description'];

        $add_data = "insert into product(p_name,p_price,p_desc) values('$name','$price','$desc')";
        $send_data = mysqli_query($dbCon,$add_data);

        if($send_data){
            echo "Data sent successfully";
        }
        else{
            echo "Error sending data";
        }
    }
?>
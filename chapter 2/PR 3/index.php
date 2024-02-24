<?php
    include('connection.php');

    $sql = "create table product2(
        pro_id int(3) primary key auto_increment,
        product_name varchar(200) not null,
        product_price float not null,
        description varchar(500))";

    $qry = mysqli_query($conn,$sql);

    if($qry){
        echo "<br>Table created successfully";
    }
    else{
        echo "<br>Could not create table";
    }
?>  
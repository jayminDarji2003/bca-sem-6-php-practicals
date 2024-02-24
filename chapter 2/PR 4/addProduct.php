<?php
    include("connection.php");

    $product_name = $_POST["pro_name"];
    $product_price = $_POST["price"];
    $product_desc = $_POST["description"];

    if(!empty($product_name) && !empty($product_price) && !empty($product_desc)){
        $sql = "insert into product(product_name, product_price, description) values('$product_name', '$product_price', '$product_desc')";
        $qry = mysqli_query($conn,$sql);
        if($qry){
            header("location:product_record.php");
        }
    }
    else{
        header("location:connection.php?msg=please try again");
    }
?>
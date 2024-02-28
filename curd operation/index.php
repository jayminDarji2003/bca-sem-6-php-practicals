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
           // echo "Data sent successfully";
        }
        else{
            echo "Error sending data";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
    <style>
        body {
            background-color: rgb(186, 177, 177);
        }

        .add-btn {
            background-color: blueviolet;
            color: wheat;
            font-weight: bold;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1>
        <center>
            All Products
        </center>
    </h1>
    <div>
        <a href="addProduct.html" class="add-btn">+ Add product</a>
    </div>


    <!-- show data here  -->
    <?php
        $fetch_data = "select * from product";
        $qry = mysqli_query($dbCon,$fetch_data);
        $no_of_data_fetched = mysqli_num_rows($qry);

        echo " <h3>Total Products : $no_of_data_fetched</h3><br>";

        // if($no_of_data_fetched > 0){
        //     while($row = mysqli_fetch_assoc($qry)){
        //         echo $row['p_id']. " ";
        //         echo $row['p_name']. " ";
        //         echo $row['p_price']. " ";
        //         echo $row['p_desc']. " <br>";
        //     }
        // }
            if($no_of_data_fetched > 0){
                echo "<table border='1'>";
                echo "<tr><th>ID</th><th>Name</th><th>Price</th><th>Description</th></tr>";
                while($row = mysqli_fetch_assoc($qry)){
                    echo "<tr>";
                    echo "<td>".$row['p_id']."</td>";
                    echo "<td>".$row['p_name']."</td>";
                    echo "<td>".$row['p_price']."</td>";
                    echo "<td>".$row['p_desc']."</td>";
                    echo "<td> 
                            <button>
                            <a href='edit.html'>
                            Edit
                            </a>
                            </button>
                        </td>";
                    echo "<td> 
                            <button>Delete</button>
                        </td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No results found";
            }
    ?>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add product page</title>
    <style>
        body {
            background-color: bisque;
        }

        input {
            padding: 5px;
        }

        label {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>
        <center>
            Add Product Page
        </center>
    </h2>

    <div class="addProduct">
        <form action="addProduct.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="pname">Product Name</label>
                        <input type="text" name="pname" placeholder="product name" required>
                    </td>
                </tr>


                <!-- <br><br> -->
                <tr>
                    <td>
                        <label for="price">Product Price</label>
                        <input type="text" name="price" placeholder="product price" required>
                    </td>
                </tr>

                <!-- <br><br> -->

                <tr>
                    <td>
                        <label for="desc">Product Desription</label>
                        <input type="text" name="desc" placeholder="product description" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit">
                        <input type="reset" value="reset">
                    </td>
                </tr>

            </table>
        </form>
    </div>

    <?php
    include("dbConnection.php");
    $sql = "create table product(
        p_id int(10) primary key auto_increment,
        p_name varchar(100) not null,
        p_price int(10) not null,
        p_desc varchar(255) not null
    )";
    $qry = mysqli_query($conn, $sql);
    if($qry){
        echo "table created successfully";
    }
    else{
        echo "table not created successfully";
    }
?>
</body>
</html>
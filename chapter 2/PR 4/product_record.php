<?php
    include("connection.php");
    $sql = "select * from product";
    $res = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all products</title>
</head>

<body>
    <h3>
        <a href="index.php">+ Add Product</a>
    </h3>

    <table border="1">
        <tr bgcolor="#6699ff">
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Description</th>
        </tr>

        <?php
            while($row=mysqli_fetch_array($res))
            {
                ?>
        <tr bgcolor="#ffcc33">
            <td>
                <?php echo $row["pro_id"]; ?>
            </td>
            <td>
                <?php echo $row["product_name"]; ?>
            </td>
            <td>
                <?php echo $row["product_price"]; ?>
            </td>
            <td>
                <?php echo $row["description"]; ?>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>

</html>
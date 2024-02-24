<?php
    if(isset($_GET['MSG'])){
        echo $_GET['MSG'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Product</title>
</head>

<body>
    <form action="addProduct.php" method="post">
        <table>
            <caption>
                <b>add product</b>
            </caption>

            <tr>
                <td>
                    <label for="name">Product name</label>
                </td>
                <td>
                    <input type="text" name="pro_name" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="price">Price</label>
                </td>
                <td>
                    <input type="number" name="price" required> 
                </td>
            </tr>

            <tr>
                <td>
                    <label for="desc">Description</label>
                </td>
                <td>
                    <input type="text" name="description" required>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="add" name="add">
                </td>
                <td>
                    <input type="reset" value="reset" name="reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
    include("connection.php");
    if(!empty($_POST['search_product'])){
        $search = $_POST['search_product'];
        $sql = "select * from product where product_id = $search";
        $res = mysqli_query($conn,$sql);
    }
    else{
        $sql = "select * from product";
        $res = mysqli_query($conn,$sql);
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product search</title>

    <style>
        .container {
            flat: right;
            width: 200px;
            margin-right: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="<?php $_SERVER[" PHP_SELF"]; ?>" method="post">
            <table>
                <tr>
                    <td>
                        <select name="search_product">
                            <option value="">please select</option>
                            <?php 
                                $sql = "select * from product";
                                $res = mysqli_query($conn,$sql);

                                while($row_search=mysqli_fetch_array($res))
                                {   ?>
                            <option value="<?php echo $row_search[" product_id"]; ?>">
                                <?php echo $row_search["product_name"];?>
                            </option>
                            <?php }
                            ?>
                    </td>

                    <td>
                        <input type="submit" value="search" name="search">
                    </td>
                </tr>
            </table>
        </form>


        <div>
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
        </div>


    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multidimentional array</title>
</head>
<body>
    <?php
        $grocery = array("vegetables"=>array("Tomato","Potato","Lady finger","brinjal"), "fruits"=>array("Banana","Apple","Watermelon","Muskmelon")); 

        foreach ($grocery as $key => $value) {
            foreach ($value as $item) {
                echo $item . " ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>
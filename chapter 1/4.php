<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    
        <h1>Array</h1>

        <?php
             $sub = array(1,2,3,4,5);

            // using for loop
            echo "For loop...<br>";
            for($i=0; $i<count($sub); $i++){
                print_r($sub[$i]. " ");
            }

            // using foreach loop
            echo "<br>Foreach loop...<br>";
            foreach($sub as $value){
                print_r($value);
            }
        ?>

</body>
</html>
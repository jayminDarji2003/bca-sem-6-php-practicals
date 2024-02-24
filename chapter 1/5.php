<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $student = array("name"=>"het darji", "age"=>21, "gender"=>"male","live"=>"ahmedabad");
        print_r($student);

        echo "<br>";
        echo $student["name"];
        echo "<br>";
        echo $student["age"];
        echo "<br>";
        echo $student["gender"];
        echo "<br>";
        echo $student["live"];

        echo "<br> ---------------------<br>";

        foreach($student as $key=>$value){
            echo "$key: $value <br>";
        }

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php basics</title>
</head>
<body>
    <?php
        /*print_r("hii jaymin darji");
        echo "this is first program of php basics";*/
        echo "<h1><center>php basics</center></h1>";

        // how we can create variables
        $age = 10;
        $name = "jaymin darji";
        echo $age.$name;

        /*
            Operators
                1. arithmatic operator
                    -> +,-,/,*,%
                2. logical operator
                    -> && , || , !
                3. comparison operator  
                    -> <, >, <=, >=, ==, !=
                5. increment/decrement operator
                    -> ++, --
                6. ternary operator
                    -> ? :
                7. asignment operator
                    -. ==, != ,+=, -=, *=,/=
        */

        // creating constant veriable
        define('PHP_VERION', 3.24);

        // if else
        $num = 14;

        echo "<br>";

        // number odd or even tell me
        if($num % 2 == 0){
            echo "$num is even number";
        }
        else{
            echo "$num is odd number";
        }


        // array
        $myarray = array("jaymin","poonam","gopi");
        print_r($myarray);

        sort($myarray); // sort an array

        for ($i=0; $i<count($myarray); $i++){
            echo " $myarray[$i]";
        }

        foreach ($myarray as $key=>$value){
            echo "$key $value";
        }

        // how we can create the function
        function sum($num1, $num2){
            return $num1 + $num2;
        }

        echo sum(10,20); // calling the function

        // strings in php
        $str = "this is a string";
        $s1 = "php";
        $s2 = "basics";
        echo $s1.$s2;
        echo strlen($str);

        // switch case statements
        $day = "tuesday";

        switch($day){
            case "monday":
                echo "monday";
                break;
            case "tuesday":
                echo "tuesday";
                break;
            case "wednesday":
                echo "wednesday";
                break;
            case "thursday":
                echo "thursday";
                break;
            case "friday":
                echo "friday";
                break;
            case "saturday":
                echo "saturday";
                break;
            case "sunday":
                echo "sunday";
                break;
            default:
                echo "invalid day";
        }
    ?>
</body>
</html>
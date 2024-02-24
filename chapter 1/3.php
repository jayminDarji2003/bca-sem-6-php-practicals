<?php
    $age = 19;
    $gender = "f";

    if($age >= 18){
        if($gender == "f"){
            echo "You can vote and you are female candidate.";
        }
        else{
            echo "You can vote and you are male candidate.";
        }
    }
    else{
        echo "You can not vote!!";
    }

?>
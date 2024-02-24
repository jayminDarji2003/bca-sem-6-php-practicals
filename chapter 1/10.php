<?php
    $count = 0;
    $value = 1;

    $array = array(1,2,3,4,1,4,5,1,6,8,1);

    for($i=0; $i<count($array); $i++){
        if($array[$i] == $value){
            $count++;
        }
    }

    echo "The $value present in the array $count times.";
?>
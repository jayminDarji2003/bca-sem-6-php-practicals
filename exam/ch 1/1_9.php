<?php
    // write a php program to sort an array in ascending order and descending order

    $arr = array(5,4,7,2,4,8,20,46,9);
    sort($arr);
    echo "ascending order sort <br>";
    foreach($arr as $value){
        echo $value."\n";
    }
    rsort($arr);
    echo "<br>descending order sort <br>";
    foreach($arr as $value){
        echo $value."\n";
    }
?>
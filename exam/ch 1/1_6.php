<?php
    // exploring multidimensional array
    $mulArray = array("Vegetables"=>array("Tomatos","Potatos","Lady finger","brinjal","cabbage","onion"), "fruits"=>array("apple","banana","water melon","muskmelon","orange","apple ber"));

    echo "<h2>Multidimensional array</h2> <br>";
    print_r($mulArray);

    // print array
    foreach($mulArray as $value) {
        foreach($value as $res) {
            echo "$res<br>";
        }
    }
    
?>
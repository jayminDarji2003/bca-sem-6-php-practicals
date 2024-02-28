<?php
    $arr = array(4,5,6,3,6,8,3,7,3,8);
    $arr2 = "this is a big surprise that the most big beautiful award goes to big man jaymin darji";
    $word = "big";
    $val = 3;
    $count = 0;
    $count2=0;

    foreach($arr as $value){
        if($val == $value){
            $count++;
        }
    }

    // for($i=0; $i<count($arr); $i++){
    //     if($val == $arr[$i]){
    //         $count++;
    //     }
    // }
    
    $v = explode(" ",$arr2);
    for($i=0;$i<count($v); $i++){
        if($v[$i] == $word){
            $count2++;
        }
    }

    echo "The value $val comes in an array $count times";
    echo "<br>";
    echo "The value $word comes in an array $count2 times";
?>
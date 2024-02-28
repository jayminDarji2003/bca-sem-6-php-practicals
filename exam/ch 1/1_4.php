<?php
    $sub = array("php","shell","dmdw","aiml","cc");

    // display using for loop
    echo "<b>Displaying using for loop...</b>";    
    for ($i=0; $i<count($sub); $i++){
        echo "<br> $sub[$i]";
    }

    // display using foreach loop
    echo "<br><b>Displaying using foreach...</b>";
    foreach($sub as $value){
        echo "<br> $value";
    }
?>
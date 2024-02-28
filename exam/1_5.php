<?php
    // creating a key index array
    $student = array("name"=>"jaymin", "age"=>21, "study"=>"bca final year", "marital status" => "single");

    // access using key
    echo "<h3>Accessing using keys</h3>";
    echo  $student['name']." ";
    echo  $student['age']. " ";
    echo  $student['study']."  ";
    echo  $student['marital status']." ";

    // access using foreach
    echo "<br>Access using foreach<br>";
    foreach($student as $key=>$value){
        echo $key.$value;
    }
?>
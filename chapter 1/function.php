<?php
    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     function merge(){
    //         if(isset($_POST["fname"]) && isset($_POST["lname"])){
    //             $fname = $_POST["fname"];
    //             $lname = $_POST["lname"];

    //             echo $fname." ".$lname;
    //         }
    //         else{
    //             echo "please provide a valid fname and lname";
    //         }
    //     }

    //     merge();
    // }


    // second way of doing this 
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    echo $fname." ".$lname;
?>
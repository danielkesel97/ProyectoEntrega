<?php

 if(isset($_POST["password1"]) && isset($_POST["password2"])) {
    $p1 = $_POST["password1"];
    $p2 = $_POST["password2"];
    if($p1 == $p2) {
        echo "si" ;
    } else { 
        echo "No iguales";
    }
 } else {
     $p1 = "";
     $p2 = "";
 }
?>
<?php

    var_dump($_GET);
    $name = $_GET["name"];
    $idade = $_GET["idade"];
    $altura = $_GET["altura"];
    $peso = $_GET["peso"];

    echo $name . " " . $idade . " " . $altura . " " . $peso;
    
?>
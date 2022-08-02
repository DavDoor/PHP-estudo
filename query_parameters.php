<?php
    //URL "http://localhost/estudo/query_parameters.php?name=maria&idade=25&altura=1.70&peso=70" para teste.
    var_dump($_GET);
    $name = $_GET["name"];
    $idade = $_GET["idade"];
    $altura = $_GET["altura"];
    $peso = $_GET["peso"];

    echo $name . " " . $idade . " " . $altura . " " . $peso;

    
?>
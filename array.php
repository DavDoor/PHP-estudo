<?php

    $tarefas = array("jogar lixo fora", "estudar javascript", "escovar os dentes", "ensaiar musicas");
    
    //echo $tarefas[0] . " " . $tarefas[2] . " " . $tarefas[3] . " " . $tarefas[1];   
    
    echo $tarefas[0]; 
    echo $tarefas[2];
    echo $tarefas[3];
    echo $tarefas[1];
    
    echo "<br>";

    echo implode("-", $tarefas); // separador

    echo "<br>";

    $tarefas = ["jogar lixo fora", "estudar javascript", "escovar os dentes", "ensaiar musicas"];   
    
    echo $tarefas[0]; 
    echo $tarefas[2];
    echo $tarefas[3];
    echo $tarefas[1];

    echo "<br>";

    $carros = ["Fiesta", "Gol", "Fusca", "Civic", "Mercedes"];
    
    echo $carros[0]; 
    echo $carros[2];
    echo $carros[3];
    echo $carros[1];
    echo $carros[4];
    echo "<br>";

    //echo $carros[5]; Error Undefined array
    //echo $carros[-1]; Error undefined array

    $pessoas = array("Danyllo" => 28, "David" => 29);

    echo var_dump($pessoas);
    echo $pessoas["David"];
    echo $pessoas["Danyllo"];
    echo "<br>";
    // echo implode("-", $pessoas); //separador

    //echo print_r($carros);




?>
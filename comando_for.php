<?php

    $carros = ["Fiesta", "Gol", "Fusca", "Civic", "Mercedes"];
    //"foreach" mais simples e usual sem necessidade de um contador
    //"for" uso necesssario ter um contador
    foreach ($carros as $c){ // fazer um alias 

        echo $c;
        echo "<br>";
    }

    for ($i = 0; $i < count($carros); $i++){

        echo "Verificando " . $i;
        echo "<br>";

        echo $carros[$i];
        echo "<br>";
    }

    echo "<br>";

    $tarefas = ["jogar lixo fora", "estudar javascript", "escovar os dentes", "ensaiar musicas"];   
    
    foreach ($tarefas as $t) { // fazer um alias

        echo $t;
        echo "<br>";
    }

    for ($i = 0; $i < count($tarefas); $i++){

        echo $tarefas[$i];
        echo "<br>";
    }

    echo "<br>";

    $inteiros = array(); //posso usar "[]" vazio

    for ($i = 0; $i < 20; $i++){

        array_push($inteiros, $i);
    }

    echo var_dump($inteiros);

?>
<?php

    $carros = ["Fiesta", "Gol", "Fusca", "Civic", "Mercedes"];
    //"foreach" mais simples e usual sem necessidade de um contador
    //"for" uso necesssario ter um contador

    foreach ($carros as $c){ // fazer um alias (apelido)

        echo $c;
        echo "<br>";
    }
    echo "<br>";

    for ($i = 0; $i < count($carros); $i++){

        echo "Verificando posição " . $i . " = " . $carros[$i];
        echo "<br>";
    }

?>
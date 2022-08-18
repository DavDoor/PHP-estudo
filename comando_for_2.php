<?php

$tarefas = ["jogar lixo fora", "estudar javascript", "escovar os dentes", "ensaiar musicas"];   
    
foreach ($tarefas as $t) { // fazer um alias

    echo $t;
    echo "<br>";
}

echo "<br>";


for ($i = 0; $i < count($tarefas); $i++){

    echo $tarefas[$i];
    echo "<br>";
}


?>
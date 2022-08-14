<?php
    //Usar um array especifico e printar os dados com o while e dowhile
    
    $multiplos10 = array("10", "20", "30", "40", "50", "60", "70", "80", "90", "100");

    echo $multiplos10[0];

    $count = 0;
    //while($couunt > 10)
    while($count < count($multiplos10)){

        echo $multiplos10[$count] . "<br>";
        $count++;
    }

    echo "<br>";

    $i = 0; // indice é a posição dentro do array

    do{
        echo $multiplos10[$i] . "<br>";
        $i++;

    }  while($i < count($multiplos10));

?>
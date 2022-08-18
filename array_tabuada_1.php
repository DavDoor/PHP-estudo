<?php
    //printar uma tabuada com contador

    $tabuada = array("1","2","3","4","5","6","7","8","9","10");

    $i = 10; //quando mudo a variavel, me retorna o valor diferente multiplicado por ela

    for($n=0; $n < count($tabuada); $n++){

        $somaTotal =  $tabuada[$n]*$i;
        echo  $tabuada[$n] . " x " . $i . " = " . $somaTotal;
        echo "<br><br>";
    }

    echo "<br>";

    
?>
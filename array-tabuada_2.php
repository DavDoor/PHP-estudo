<?php
    //printar uma tabuada com contador

   
    $i = 2; //quando mudo a variavel, me retorna o valor diferente multiplicado por ela

    for($n=1; $n <= 10; $n++){

        $somaTotal =  $n * $i;
        echo  $n . " x " . $i . " = " . $somaTotal;
        echo "<br><br>";
    }

    echo "<br>";

?>
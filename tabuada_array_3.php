<?php
    //printar uma tabuada com contador

    for ($i=1; $i <= 10; $i++){
        echo "Printando tabuada de " . $i;
        echo "<br>"; 

        for($n=1; $n <= 10; $n++){

            $somaTotal =  $n * $i;
            echo  $n . " x " . $i . " = " . $somaTotal;
            echo "<br>";
        }  
        echo "<br>"; 
    } 
?>
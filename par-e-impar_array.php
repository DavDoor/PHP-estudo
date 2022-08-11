<?php
    //par ou impar
    //usar o for de 10 até 100 por exemplo
    //verfiicar o for, colocando o if ($i % 2 == 0) será par

        echo "Números pares entre 10 e 100:";
        echo "<br>";

        for ($n=10; $n <= 100; $n++){
            echo "<br>";

            if($n % 2 == 0){
                echo $n . " é par.";
            } 
            else {
                echo $n . " é ímpar.";
            }
        }
    
?>
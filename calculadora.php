<?php
    // 1) Crie duas variaveis que representam os numeros;
    //    Crie uma função de soma que receba dois numeros e retorne o resultado da operação;
    //    Print resultado.

    //2) Repita o processo da função e do  print do resultado, porém recebendo os query parametros 
    //    ("var_dump" não necessario.)


    $n1 = 1;
    $n2 = 2;
    
    // Função soma
   function somaNumero($n1, $n2) {

    $totalSoma = $n1 + $n2;
    echo "A soma dos dois numeros é igual a  " . $totalSoma . "." ;
    return $totalSoma; 
   }

   somaNumero(10, 7);
   echo "<br><br>";

   $n1 = $_GET["n1"];
   $n2 = $_GET["n2"];

   echo $n1 . " " . $n2;
   //http://localhost/estudo/calculadora.php?n1=10&n2=30
   
?>
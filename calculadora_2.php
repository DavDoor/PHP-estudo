<?php
    // 1) Modificação do arquivo "calculadora"(soma) com as quatro operações.

    $n1 = 1;
    $n2 = 2;

    // Função SOMAR
   function somaNumero($n1, $n2) {

        $totalSoma = $n1 + $n2;
        echo "A soma dos dois números é igual a  " . $totalSoma . "." ;
        return $totalSoma; 
   }

    somaNumero(10, 7);
    echo "<br><br>";

    //função SUBTRAIR
    function subNumero($n1, $n2) {

        $totalSub = $n1 - $n2;
        echo "A diferença dos dois números é " . $totalSub .".";
        return $totalSub;
    }

    subNumero(10, 2);
    echo "<br><br>";
    
    // Função MULTIPLICAR
    function multNum($n1, $n2) {

        $totalMult = $n1 * $n2;
        echo "A multiplicação dos dois números é igual a  " . $totalMult . "." ;
        return $totalMult; 
   }

    multNum(10, 5);
    echo "<br><br>";

   //função DIVIDIR
    function divNumero($n1, $n2) {

        $totalDiv = $n1 / $n2;
        echo "A divisão dos dois números é igual a  " . $totalDiv . "." ;
        return $totalDiv;
    }

    divNumero(20, 4);

?>
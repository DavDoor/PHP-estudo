<?php
    // 1) Modificação do arquivo "calculadora"(soma) com as quatro operações.

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $operacao = $_GET["operacao"];


    // Função SOMAR
   function soma($n1, $n2) {
        return $n1 + $n2; 
   }

    //função SUBTRAIR
    function subtracao($n1, $n2) {
        return $n1 - $n2;
    }

    // Função MULTIPLICAR
    function multiplicacao($n1, $n2) {
        return $n1 * $n2;
   }

   //função DIVIDIR
    function divisao($n1, $n2) {
        return $n1 / $n2;
    }

    if ($operacao == "soma" || $operacao == "atalho"){
        echo soma($n1, $n2); //http://localhost/estudo/calculadora_3.php?n1=10&n2=20&operacao=soma
    }

    else if ($operacao == "subtracao"){

        echo subtracao($n1, $n2); //http://localhost/estudo/calculadora_3.php?n1=10&n2=20&operacao=subtracao
    }
    
    else if ($operacao == "multiplicacao"){

        echo multiplicacao($n1, $n2); //http://localhost/estudo/calculadora_3.php?n1=10&n2=20&operacao=multiplicacao
    }
    else if ($operacao == "divisao"){

        echo divisao($n1, $n2); //http://localhost/estudo/calculadora_3.php?n1=10&n2=20&operacao=divisao
    }
    else{
        echo "Não é uma operação!";
    }
        
//"http://localhost/estudo/calculadora_3.php?n1=10&n2=20&operacao=atalho" (distinto)

?>
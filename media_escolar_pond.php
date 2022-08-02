<?php 
    //Calcular média ponderada.
    //4 bimestres com 2 avaliações.
    //Para prova considere peso 7 e para o teste peso 3.
    //Exemplo: Uma pessoa tirou 8 na prova e teste 5 ambos valendo 10.
    //Regra: (a note que é 8 vezes peso que é 7) mais (a nota do teste que é 5 vezes o peso que é 3)
    // dividido pelo total de peso

    $peso_prova = 7;
    $peso_teste = 3;

    echo ($peso_prova * 8 + $peso_teste * 5)/($peso_prova + $peso_teste);
    echo "<br>";
    echo "<br>";
    
    $nota_prova = 8;
    $nota_teste = 5;
    $total_peso = $peso_prova + $peso_teste;
    $total_notas = $peso_prova * $nota_prova + $peso_teste * $nota_teste;
    
    echo $total_notas/$total_peso;
    echo "<br>";
    echo "<br>";
    echo calcularNota(10, 5);
    echo "<br>";
    echo "<br>";
    echo calcularNota(6, 4);
    echo "<br>";
    echo "<br>";
    echo calcularNota(7, 8);

    function calcularNota ($nota_prova, $nota_teste) {

        $total_peso = calcularPeso();
        $total_notas = $peso_prova * $nota_prova + $peso_teste * $nota_teste;
        
        return $total_notas/$total_peso;
    
    }

    function calcularPeso () {

        $peso_prova = 7;
        $peso_teste = 3;
        return $peso_prova + $peso_teste;
    }
    

?>
<?php

$peso = $_GET["peso"];
$altura = $_GET["altura"];

function calcularIMC ($peso, $altura){

        $imc = $peso / ($altura * $altura);
        echo $imc;
        return $imc;
    }

    $imc = round(calcularIMC($peso, $altura), 2);
    echo "<br>";

    if ($imc <= 18.5){

        echo "Baixo Peso";
    }
    else if($imc >= 18.5 && $imc <= 24.9){

        echo "Peso Normal";
    }
    else if($imc >= 25 && $imc <= 29){

        echo "Excesso de Peso";
    }
    else if($imc >= 30 && $imc <= 35 ){

        echo "Obesidade";
    }
    else{ // maior que 35 (>)
        
        echo "Obesidade Extrema";
    }

?>
<?php

$peso = $_GET["peso"];
$altura = $_GET["altura"];

function calcularIMC ($peso, $altura){

        echo $imc = $peso / ($altura * $altura);
        return $imc;
    }

    $imc = calcularIMC($peso, $altura);

    if ($imc <= 18,5){

        echo "Baixo Peso";
    }
    if else($imc >= 18,5 && $imc <= 24,9){

        echo "Peso Normal";
    }
    if else($imc >= 25 && $imc <= 29){

        echo "Excesso de Peso";
    }
    if else($imc >= 30 && $imc <= 35 ){

        echo "Obesidade";
    }
    else($imc > 35){
        
        echo "Obesidade Extrema";
    }

?>
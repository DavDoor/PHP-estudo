<?php
    //receber 4 notas pela url "GET";
    //calcular media;
    //exibir resultado(if): aprovado, reprovado e recuperação.

    $nota1 = $_GET["nota1"]; 
    $nota2 = $_GET["nota2"];
    $nota3 = $_GET["nota3"];
    $nota4 = $_GET["nota4"];

    function calcularMedia($nota1, $nota2, $nota3, $nota4){

        $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
        return $media;
    }

    $media = calcularMedia($nota1, $nota2, $nota3, $nota4);

    if ($media >= 6) {

        echo "Aprovado";

    } 

    else if($media <= 6 && $media > 1) {

        echo "Recuperação";
    }

    else {

        echo "Reprovado ";
    }
?>  
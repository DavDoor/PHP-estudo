<?php
    //lembrar de colocar na URL
    $idade = $_GET["idade"];

    if ($idade > 18 && $idade < 60) {

        echo "Você é maior de idade e não está aposentado ";
    } 

    else if($idade >= 60) {

        echo "Você é aposentado ";
    }

    else if($idade = 18) {

        echo "Você tem 18 anos ";
    }

    else {

        echo "Você é menor de idade ";

    }



?>
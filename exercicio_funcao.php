<?php
    //Criar uma função para printar mensagens de boas vindas para um nome de uma pessoal
    //A função recebera uma variavel "nome" e retornará como resultado uma string "Bem-vindo david"
    //Para concatenar usar o ".", exemplo: "bem-vindo" . "$nome" a variavel nome

    $name = "David";

    function printWelcome($name) {
    
        echo "Seja bem-vindo " . $name;
        echo "<br>";
    }

    printWelcome($name);
    printWelcome("Danyllo");
    printWelcome("Maria");
    
?>
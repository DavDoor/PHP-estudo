<?php
    $frase = "LOREM IPSUM é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado";

    echo strtolower($frase); //letras miusculas
    echo "<br>";
    echo strtoupper($frase); // letras maiusculas
    echo "<br>";
    echo strlen($frase); //contagem de caracteres
    echo "<br>";
    $array = explode(" ", $frase); 
    echo "<pre>" , var_dump($array) , "</pre>";
    echo "<br>";
    echo $array[0];
    echo "<br>";
    echo substr($frase,0,10); //
    echo "<br>";
    echo str_replace("LOREM", "XPTO", $frase);
    echo "<br>";
    echo str_word_count($frase);
    echo "<br>";
    echo implode("-", $array);
    echo "<br>";
    echo trim($frase, " "); //retirar espaços iniciais e finais

?>
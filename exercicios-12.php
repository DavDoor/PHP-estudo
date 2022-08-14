<?php
    // procurar um elemento no array
    //instanciar uma array
    //inicializar uma variavel de busca com o valor a ser pesquisado
    //fazer um for para iterar em cada elemento do array
    //fazer um if para verificar se elemento é igual e mostrar mensagem para o usuário se encontrar o elemento

    $cores = array ("azul", "verde", "vermelho", "amarelo", "rosa", "marrom");

    echo $cores[2];
    echo "<br><br>";

    echo "Iteração de array:";
    echo "<br>";
    //var_dump($cores);

    for($i = 0; $i <= count($cores); $i++){

        echo $cores[$i];
        echo "<br>";
        $i++;
    }

    $item = "laranja";

    if($item === $cores){

        echo "Item Econtrado:" . $cores[$i]; 
    }
    else{

        echo "Item não encontrado";
    }
  
?>
<?php
    // procurar um elemento no array
    //instanciar uma array
    //inicializar uma variavel de busca com o valor a ser pesquisado
    //fazer um for para iterar em cada elemento do array
    //fazer um if para verificar se elemento é igual e mostrar mensagem para o usuário se encontrar o elemento

    $cores = array ("azul", "verde", "vermelho", "amarelo", "rosa", "marrom");

    //var_dump($cores);
    $search = "marrom";
    $exists = false;

    for($i = 0; $i < count($cores); $i++){

        if ($cores[$i] === $search){
        
            $exists = true;
            echo "Item econtrado na posição " . $i; 
        }
    }

    if(!$exists){

        echo "Item não encontrado.";
    }
  
?>
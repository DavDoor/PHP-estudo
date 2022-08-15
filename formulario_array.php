<!--
    //criar um html com um input-text(caixa de texto) que receba um nome
    //criar um formulario(_get) com um campo e um botão para enviar o formulario
    //printar na tela o nome escrito no formulario

    //criar uma array fazer um if  para verificar determinado item contido dentro do array formado
    //acrescentar no array atraves do input dos dados

    "_Get" captura o que foi digitadona URL;
    "_POST" não recupera 

    //nesse caso irá resetar o array a cada requisição pois ele nao sera persistido 
-->
<?php
    $paises = array("Brasil", "México", "EUA", "França", "Holanda");
    
    $search = $_GET['paises'];
    array_push($paises, $search);
    echo var_dump($paises);
    $exists = false;

    for($i = 0; $i < count($paises); $i++){

        if ($paises[$i] === $search){
            
            $exists = true;
            echo "Item econtrado."; 
        }
    }

    if(!$exists){

        echo "Item não encontrado.";
    }

?>

    <form action=" " method="get">
    <p>Nome: <input type="text" name="paises" placeholder="Nome"></p>
    <p><input type="submit" /></p>
    </form>






    
   




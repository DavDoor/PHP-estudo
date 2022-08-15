<!DOCTYPE html>
<!--
    //criar um html com um input-text(caixa de texto) que receba um nome
    //criar um formulario(_get) com um campo e um botão para enviar o formulario
    //printar na tela o nome escrito no formulario

    //criar uma array fazer um if  para verificar determinado item contido dentro do array formado
    //acrescentar no array atraves do input dos dados

    "_Get" captura o que foi digitadona URL;
    "_POST" não recupera 
-->
<?php
    $paises = ["Brasil", "México", "EUA", "França", "Holanda"];
    

    $paises = $_GET['paises'];
    echo $paises;
?>

    <form action=" " method="get">
    <p>Nome: <input type="text" name="paises" placeholder="Nome"></p>
    <p><input type="submit" /></p>
    </form>



</html>


    
   




<!DOCTYPE html>
<!--
    //criar um html com um input-text(caixa de texto) que receba um nome
    //criar um formulario(_get) com um campo e um botão para enviar o formulario
    //printar na tela o nome escrito no formulario

    "_Get" captura o que foi digitadona URL;
    "_POST" não recupera 
-->
<?php

    $name = $_GET['name'];
    echo $name;
?>

    <form action=" " method="get">
    <p>Nome: <input type="text" name="name" placeholder="Nome"></p>
    <p><input type="submit" /></p>
    </form>



</html>


    
   




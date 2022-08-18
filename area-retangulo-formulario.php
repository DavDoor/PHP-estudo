
    <!--
        criar formulario com dois campos
        e printar o resultado da area de um retangulo
    -->
    <h3>Calcule a Área do retângulo</h3>
    <form action=" " method="post">
        Campo 1:  <input type="text" name="base" placeholder="Base" ><br> 
        Campo 2: <input type="text" name="altura" placeholder="Altura" ><br>
        <p><input type="submit" /></p>
    </form>

<?php
     $base = isset($_POST['base']) ? $_POST['base'] : "" ;
     $altura = isset($_POST['altura']) ? $_POST['altura'] : "" ;

    if (isset($base) && !empty($base) &&
        isset($altura) && !empty($altura))

    {
        $areaRetangulo = $base * $altura;
        echo "A área do retangulo é " . $areaRetangulo . ".";
    }
?>
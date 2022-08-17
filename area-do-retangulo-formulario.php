
    <!--
        criar formulario com dois campos
        e printar o resultado da area de um retangulo
    -->
    <h3>Calcule a Área do retângulo</h3>
    <form action=" " method="post">
        Campo 1:  <input type="text" name="base" placeholder="Base"><br>
        Campo 2: <input type="text" name="altura" placeholder="Altura"><br>
        <p><input type="submit" /></p>
    </form>

<?php
    $areaRetangulo = $_POST["base"] * $_POST["altura"];
    //$retangulo = isset($_POST['base']) ? $_POST['altura'] : " " ;
    echo "A área do retangulo é " . $areaRetangulo . ".";
?>
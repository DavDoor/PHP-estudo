
    <!--
        criar formulario com dois campos
        e printar o resultado da area de um triagulo
    -->
    <h3>Calcule a área do triângulo</h3>
    <form action=" " method="post">
        Campo 1:  <input type="text" name="base" placeholder="Base"><br>
        Campo 2: <input type="text" name="altura" placeholder="Altura"><br>
        <p><input type="submit" /></p>
    </form>

<?php
    $areaTriangulo = ($_POST["base"] * $_POST["altura"])/2;
    //$triangulo = isset($_POST['base']) ? $_POST['altura'] : " " ;
    echo "A área do triângulo é: " . $areaTriangulo . ".";
?>

    <!--
        criar formulario com dois campos
        e printar o resultado da area de um triagulo
    -->
    <h3>Calcule a área do triângulo</h3>
    <form action=" " method="post">
        Campo 1:  <input type="text" name="base" placeholder="Base" required><br>
        Campo 2: <input type="text" name="altura" placeholder="Altura" required><br>
        <p><input type="submit" /></p>
    </form>

<?php
    
    $base = isset($_POST['base']) ? $_POST['base'] : "" ;
    $altura = isset($_POST['altura']) ? $_POST['altura'] : "" ;

    if (isset($base) && !empty($base) &&
        isset($altura) && !empty($altura))
    {
        $areaTriangulo = ($base * $altura)/2;
        echo "A área do triângulo é " . $areaTriangulo . ".";
    }
    //$triangulo = isset($_POST['base']) ? $_POST['altura'] : " " ;
    
?>
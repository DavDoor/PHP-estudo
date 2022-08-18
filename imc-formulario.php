    <h3>Calcule o I.M.C</h3>
    <form action=" " method="post">
        Campo 1:  <input type="text" name="peso" placeholder="Peso" required><br>
        Campo 2: <input type="text" name="altura" placeholder="Altura" required><br>
        <p><input type="submit" /></p>
    </form>

<?php
    //criar formulario para imc

$base = isset($_POST['peso']) ? $_POST['peso'] : "" ;
$altura = isset($_POST['altura']) ? $_POST['altura'] : "" ;

if (isset($peso) && !empty($peso) &&
isset($altura) && !empty($altura))

{
function calcularIMC ($peso, $altura){

        $imc = $peso / ($altura * $altura);
        echo "Seu imc é: " . $imc;
        return $imc;
    }

    $imc = round(calcularIMC($peso, $altura), 2);
    echo "<br>";

    if ($imc <= 18.5){

        echo "Baixo Peso";
    }
    else if($imc >= 18.5 && $imc <= 24.9){

        echo "Peso Normal";
    }
    else if($imc >= 25 && $imc <= 29){

        echo "Excesso de Peso";
    }
    else if($imc >= 30 && $imc <= 35 ){

        echo "Obesidade";
    }
    else{ // maior que 35 (>)
        
        echo "Obesidade Extrema";
    }
}


?>
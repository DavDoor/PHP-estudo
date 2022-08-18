    <h3>Calcule o I.M.C</h3>
    <form action=" " method="post">
        <label>Peso:</label>
        <input type="text" name="peso" placeholder="Peso" required><br>
        <label>Altura:</label>
        <input type="text" name="altura" placeholder="Altura" required><br>
        <p><input type="submit" /></p>
    </form>

<?php
    //criar formulario para imc

    $peso = isset($_POST['peso']) ? $_POST['peso'] : "" ;
    $altura = isset($_POST['altura']) ? $_POST['altura'] : "" ;

    if (isset($peso) && !empty($peso) &&
    isset($altura) && !empty($altura)) {


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
    else{
            echo "Todos os campos devem ser preechidos.";
        }

    function calcularIMC ($peso, $altura){

        $imc = $peso / ($altura * $altura);
        echo "Seu imc é: " . $imc;
        return $imc;
    }


?>
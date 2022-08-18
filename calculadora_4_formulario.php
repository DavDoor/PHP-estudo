
<!--1) Modificação do arquivo "calculadora"(soma) com as quatro operações.
        //para casa
-->
        <h3>Calculadora de Operações Multiplas</h3>
        <form action=" " method="post">
            Campo 1: <input type="text" name="n1" placeholder="Numero 1" required><br>
            Campo 2: <input type="text" name="n2" placeholder="Numero 2" required><br>
            Campo 3: <input type="text" name="operacao" placeholder="Operação" required><br>
            <p><input type="submit" /></p>
        </form>

<?php
    $n1 = isset($_POST['n1']) ? $_POST['n1'] : "" ;
    $n2 = isset($_POST['n2']) ? $_POST['n2'] : "" ;
    $operacao = isset($_POST['operacao']) ? $_POST['operacagit o'] : "" ;


    if (isset($n1) && !empty($n1) &&
    isset($n2) && !empty($n2) && 
    isset($operacao) && !empty($operacao)) {

        if ($operacao == "soma" || $operacao == "atalho"){
            echo soma($n1, $n2); 
        }

        else if ($operacao == "subtracao"){

            echo subtracao($n1, $n2); 
        }
        
        else if ($operacao == "multiplicacao"){

            echo multiplicacao($n1, $n2); 
        }
        else if ($operacao == "divisao"){

            echo divisao($n1, $n2); 
        }
        else{
            echo "Não é uma operação!";
        }

    }
      // Função SOMAR
    function soma($n1, $n2) {
        return $n1 + $n2; 
    }

    //função SUBTRAIR
    function subtracao($n1, $n2) {
        return $n1 - $n2;
    }

    // Função MULTIPLICAR
    function multiplicacao($n1, $n2) {
        return $n1 * $n2;
    }

    //função DIVIDIR
    function divisao($n1, $n2) {
        return $n1 / $n2;
    }


?>
<!--
    // criar uma calculadora(formulario) com select, usando as opcções de operações 
    // 3 campos
-->
    <h3>Calculadora de Operações Multiplas</h3>
    <form action=" " method="post">
        Campo 1: <input type="number" name="n1" placeholder="Numero 1" required><br>
        Campo 2: <input type="number" name="n2" placeholder="Numero 2" required><br>
        Campo 3: <select type="text" name="operacao" >
                    <option value="">Escolha a operação</option> 
                    <option value="adicao">Adição</option>
                    <option value="subtracao">Subtração</option>
                    <option value="multiplicacao">Multiplicação</option>
                    <option value="divisao">Divisão</option>                
                </select><br>
        <p><input type="submit" /></p>
        </form>

<?php
    $n1 = isset($_POST['n1']) ? $_POST['n1'] : "" ;
    $n2 = isset($_POST['n2']) ? $_POST['n2'] : "" ;
    $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : "" ;
    //echo "Está vazio" . empty($_POST['n1']) . "<br>";
    //die;

    if (isset($n1) && isset($n2) && isset($operacao) && !empty($operacao)) {

    switch ($operacao) {

        case $operacao == "adicao":
          echo adicao($n1, $n2);
          break;
        case $operacao == "subtracao":
          echo subtracao($n1, $n2);
          break;
        case $operacao == "multiplicacao":
          echo multiplicacao($n1, $n2);
          break;
        case $operacao == "divisao":
          echo divisao($n1, $n2); 
          break;
        default:
            echo "Não é possível completar a operação!";
      }
    }
    //else {
    //       echo "Todos os campos devem ser preeechidos.";
    //}
      // Função SOMAR
    function adicao($n1, $n2) {
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
        if($n2 == 0){                  //Verificação da operação
            return "Divisão inválida";
        }
        return $n1 / $n2;
    }


?>
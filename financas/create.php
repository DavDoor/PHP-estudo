<?php
  //base de dados finanças
  //tabela movimentações > id, categoria(SElect) 
  //tipo (receita e despesas), observações das categorias, valor da movimentação,  

  $datapagamento = isset($_POST['datapagamento']) ? $_POST['datapagamento'] : "" ;
  $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : "" ; // receita ou despesa
  $valor = isset($_POST['valor']) ? $_POST['valor'] : "" ; 
  $formapagamento = isset($_POST['formapagamento']) ? $_POST['formapagamento'] : "" ; // a vista, debito
  $observacao = isset($_POST['observacao']) ? $_POST['observacao'] : "" ;// lazer, alimentação, saude, casa ?
  $saldo = isset($_POST['saldo']) ? $_POST['saldo'] : "" ; // saldo final: negativo ou positivo ? 

  if (isset($datapagamento) && !empty($datapagamento) &&
  isset($tipo) && !empty($tipo) && 
  isset($valor) && !empty($valor) &&
  isset($formapagamento) && !empty($formapagamento) &&
  isset($observacao) && !empty($observacao) && 
  isset($saldo) && !empty($saldo))
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "financas";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `financas` (`datapagamento`, `tipo`, `valor`, `formapagamento`, `observacao`, `saldo`) VALUES ('$datapagamento', '$tipo', '$valor', '$formapagamento', '$observacao', $saldo)";

    if ($conn->query($sql) === TRUE) {
      echo "Novo registro criado.";
    } else {
      echo "Errado: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }

//Criar formulario com os campos compras (inserção)
//botao enviar com post
//fazer um if para enviar e coonfimar, caso seja preenchido (Insert into)
//
?>

    <form action="create.php" method="post">
        <p>First Name: <input type="text" name="datapagamento" placeholder="Data de Pagamento"></p>
        <p>Last Name: <input type="text" name="tipo" placeholder="Tipo"></p>
        <p>Quatity: <input type="number" name="valor" placeholder="Valor"></p>
        <p>Value: <input type="number" name="formapagamento" placeholder="Forma de Pagamento"></p>
        <p>Product: <input type="text" name="observacao" placeholder="Observação"></p>
        <p>Details: <input type="text" name="saldo" placeholder="Saldo"></p>
        <p><input type="submit" /></p>
    </form>

    <a href="index.php">Voltar para listagem</a>

    

 




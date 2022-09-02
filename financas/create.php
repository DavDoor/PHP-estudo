<?php
  //base de dados finanças
  //tabela movimentações > id, categoria(SElect) 
  //tipo (receita e despesas), observações das categorias, valor da movimentação,  

  $datapagamento = isset($_POST['datapagamento']) ? $_POST['datapagamento'] : "" ;
  $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : "" ; // receita ou despesa
  $valor = isset($_POST['valor']) ? $_POST['valor'] : "" ; 
  $formapagamento = isset($_POST['formapagamento']) ? $_POST['formapagamento'] : "" ; // a vista, debito
  $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : "" ;// lazer, alimentação, saude, casa ?

  if (isset($datapagamento) && !empty($datapagamento) &&
  isset($tipo) && !empty($tipo) && 
  isset($valor) && !empty($valor) &&
  isset($formapagamento) && !empty($formapagamento) &&
  isset($categoria) && !empty($categoria))
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

    $sql = "INSERT INTO `movimentacoes` (`datapagamento`, `tipo`, `valor`, `formapagamento`, `categoria`) VALUES ('$datapagamento', '$tipo', '$valor', '$formapagamento', '$categoria')";

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
        <p>Data de Pagamento: <input type="date" name="datapagamento" placeholder="Data de Pagamento"></p>
        <p>Tipo: <select type="text" name="tipo"></p>
          <option value="">Escolha</option>
          <option value="">Receita</option>
          <option value="">Despesa</option>
        </select>
        <p>Valor: <input type="number" name="valor" placeholder="Valor"></p>
        <p>Forma de Pagamento: <select type="text" name="formapagamento"></p>
                <option value="">Escolha</option> 
                <option value="adicao">Dinheiro</option>
                <option value="adicao">Cartão de Crédito</option>
                <option value="adicao">Cartão de Débito</option>
                <option value="adicao">Boleto</option>
                <option value="adicao">PIX</option>
                </select><br>
        <p>Categoria: <input type="text" name="categoria" placeholder="Categoria"></p>
        <p><input type="submit" /></p>
    </form>

    <a href="index.php">Voltar para listagem</a>

    

 




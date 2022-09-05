<?php
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

$id = isset($_POST['id']) ? $_POST['id'] : "" ;
$datapagamento = isset($_POST['datapagamento']) ? $_POST['datapagamento'] : "" ;
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : "" ;
$valor = isset($_POST['valor']) ? $_POST['valor'] : "" ;
$formapagamento = isset($_POST['formapagamento']) ? $_POST['formapagamento'] : "" ;
$categoria = isset($_POST['categoria']) ? $_POST['categoria'] : "" ;

if (isset($id) && !empty($id) &&
isset($datapagamento) && !empty($datapagamento) &&
isset($tipo) && !empty($tipo) && 
isset($valor) && !empty($valor) &&
isset($formapagamento) && !empty($formapagamento) &&
isset($categoria) && !empty($categoria))
{

  $sql = "UPDATE `movimentacoes` SET datapagamento='$datapagamento', tipo='$tipo', valor='$valor', formapagamento='$formapagamento', categoria='$categoria' WHERE id=" . $id;
  
  if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado!";
  } else {
    echo "Erro de atualização do registro: " . $conn->error;
  }
  
}
  $conn->close();
  ?>
  
  <a href="index.php">Voltar para listagem</a>
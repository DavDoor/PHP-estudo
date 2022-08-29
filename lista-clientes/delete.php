<?php
$servername = "localhost";
$username = "username";
$password = " ";
$dbname = "clientes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE compras SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Criação da tabela criada bem-sucedida.";
} else {
  echo "Erro de atualização do registro " . $conn->error;
}

$conn->close();
?>
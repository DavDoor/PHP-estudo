<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clientes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE compras SET lastname='XPTO' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Registro atualizado!";
} else {
  echo "Erro de atualização do registro: " . $conn->error;
}

$conn->close();
?>
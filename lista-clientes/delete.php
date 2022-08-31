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

$sql = "DELETE FROM compras WHERE id=7";

if ($conn->query($sql) === TRUE) {
  echo "Registro deletado com sucesso!";
} else {
  echo "Erro de remoção do registro." . $conn->error;
}

$conn->close();
?>
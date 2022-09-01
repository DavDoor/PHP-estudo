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

$id = $_GET["id"];

$sql = "DELETE FROM compras WHERE id=" . $id;

if ($conn->query($sql) === TRUE) {
  echo "Registro deletado com sucesso!";
} else {
  echo "Erro de remoção do registro." . $conn->error;
}

$conn->close();
?>
  
<br><a href="index.php">Voltar para listagem</a>

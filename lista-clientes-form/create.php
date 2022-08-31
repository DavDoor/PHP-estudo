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

$sql = "INSERT INTO `compras` (`firstname`, `lastname`, `quantity`, `value`, `product`, `details`) VALUES ('Maria', 'Santos', '109', '140', 'Cell', 'Branco')";

if ($conn->query($sql) === TRUE) {
  echo "Novo registro criado.";
} else {
  echo "Errado: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//Criar formulario com os campos compras (inserção)
//botao enviar com post
//fazer um if para enviar e coonfimar, caso seja preenchido (Insert into)
//
?>

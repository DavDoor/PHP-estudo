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

$sql = "INSERT INTO compras id, firstname, lastname, quantity, value, product, details)
VALUES ('5', John', 'Doe', '20', '50', 'SmarTV', 'Pequeno')";

if ($conn->query($sql) === TRUE) {
  echo "Novo registro criado.";
} else {
  echo "Errado: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
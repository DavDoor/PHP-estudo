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

// sql to create table
$sql = "CREATE TABLE financas (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
data VARCHAR(30) NOT NULL,
tipo VARCHAR(30) NOT NULL,
classificacao VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Criação da tabela criada bem sucedida.";
} else {
  echo "errado de criação da tabela: " . $conn->error;
}

$conn->close();
?>
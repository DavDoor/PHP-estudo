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
$sql = "CREATE TABLE movimentacoes (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
datapagamento DATE NOT NULL,
tipo VARCHAR(30) NOT NULL,
valor DOUBLE NOT NULL,
formapagamento VARCHAR (30) NOT NULL,
categoria VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Criação da tabela criada bem sucedida.";
} else {
  echo "errado de criação da tabela: " . $conn->error;
}

$conn->close();
?>
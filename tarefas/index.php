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

$sql = "SELECT id, datapagamento, tipo, valor, formapagamento, categoria FROM movimentacoes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr>";
  echo "<th>ID</th>";
  echo "<th>datapagamento</th>";
  echo "<th>tipo</th>";
  echo "<th>valor</th>";
  echo "<th>formapagamento</th>";
  echo "<th>categoria</th>";
  echo "</tr>";
  
  // output data of each row

  $saldo = 0;
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["datapagamento"]."</td>";
    echo "<td>".$row["tipo"]."</td>";
    echo "<td>R$".$row["valor"]."</td>";
    echo "<td>".$row["formapagamento"]."</td>";
    echo "<td>".$row["categoria"]."</td>";
    echo "<td><a href='update-form.php?id=" . $row["id"] ."'>Atualizar</a></td>";
    echo "<td><a href='delete.php?id=" . $row["id"] ."'>Deletar</a></td>";
    echo "</tr>";

    if($row["tipo"] == "Despesa"){  //resultado do saldo será positovo ou negativo

      $saldo -= $row["valor"];
    }else{

      $saldo += $row["valor"];
    }
  }
  echo "</table>"."<br>";
  echo "Saldo Final: R$ " . $saldo;
  echo "<br>";
} else {
  echo "0 results";
}
$conn->close();
?>
<br>
<a href="create.php">Criar nova movimentação</a>
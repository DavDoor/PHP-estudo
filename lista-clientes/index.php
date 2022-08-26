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

$sql = "SELECT id, firstname, lastname, quantity, value, product, details FROM compras";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr>";
  echo "<th>ID</th>";
  echo "<th>Name</th>";
  echo "<th>Quantity</th>";
  echo "<th>value</th>";
  echo "<th>Product</th>";
  echo "<th>Details</th>";
  echo "</tr>";
  
  // output data of each row

  $total = 0;
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["firstname"]." ".$row["lastname"]."</td>";
    echo "<td>".$row["quantity"]."</td>";
    echo "<td>".$row["value"]."</td>";
    echo "<td>".$row["product"]."</td>";
    echo "<td>".$row["details"]."</td>";
    echo "</tr>";
    $total += $row["value"];
  }
  echo "</table>";
  echo "Valor " . $total;
} else {
  echo "0 results";
}
$conn->close();
?>
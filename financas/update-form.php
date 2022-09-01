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

$id = $_GET["id"];

$sql = "SELECT * FROM compras WHERE id=" . $id;
$result = $conn->query($sql);
$dados = $result->fetch_assoc();
// var_dump($dados);

$conn->close();
?>

  <form action="update.php" method="post">
        <input  type="hidden" name="id" value="<?= $dados["id"]?>">
        <p>First Name: <input type="text" name="firstname" placeholder="First Name" value="<?= $dados["firstname"]?>"></p>
        <p>Last Name: <input type="text" name="lastname" placeholder="Last Name" value="<?= $dados["lastname"]?>"></p>
        <p>Quatity: <input type="number" name="quantity" placeholder="Quatity" value="<?= $dados["quantity"]?>"></p>
        <p>Value: <input type="number" name="value" placeholder="Value" value="<?= $dados["value"]?>"></p>
        <p>Product: <input type="text" name="product" placeholder="Product" value="<?= $dados["product"]?>"></p>
        <p>Details: <input type="text" name="details" placeholder="Details" value="<?= $dados["details"]?>"></p>
        <p><input type="submit" /></p>
    </form>
  
  <a href="index.php">Voltar para listagem</a>
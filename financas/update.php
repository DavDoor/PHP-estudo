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

$id = isset($_POST['id']) ? $_POST['id'] : "" ;
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "" ;
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "" ;
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : "" ;
$value = isset($_POST['value']) ? $_POST['value'] : "" ;
$product = isset($_POST['product']) ? $_POST['product'] : "" ;
$details = isset($_POST['details']) ? $_POST['details'] : "" ;

if (isset($id) && !empty($id) &&
isset($firstname) && !empty($firstname) &&
isset($lastname) && !empty($lastname) && 
isset($quantity) && !empty($quantity) &&
isset($value) && !empty($value) &&
isset($product) && !empty($product) &&
isset($details) && !empty($details))
{

  $sql = "UPDATE `compras` SET firstname='$firstname', lastname='$lastname', quantity='$quantity', value='$value', product='$product', details='$details' WHERE id=" . $id;
  
  if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado!";
  } else {
    echo "Erro de atualização do registro: " . $conn->error;
  }
  
}
  $conn->close();
  ?>
  
  <a href="index.php">Voltar para listagem</a>
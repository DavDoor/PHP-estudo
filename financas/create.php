<?php
  //base de dados finanças
  //tabela movimentações > id, categoria(SElect)(alimentação, transporte, salario etc... ), 
  //tipo (receita e despesas), observações das categorias, valor da movimentação,  

  $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "" ;
  $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "" ;
  $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : "" ;
  $value = isset($_POST['value']) ? $_POST['value'] : "" ;
  $product = isset($_POST['product']) ? $_POST['product'] : "" ;
  $details = isset($_POST['details']) ? $_POST['details'] : "" ;

  if (isset($firstname) && !empty($firstname) &&
  isset($lastname) && !empty($lastname) && 
  isset($quantity) && !empty($quantity) &&
  isset($value) && !empty($value) &&
  isset($product) && !empty($product) &&
  isset($details) && !empty($details))
  {
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

    $sql = "INSERT INTO `compras` (`firstname`, `lastname`, `quantity`, `value`, `product`, `details`) VALUES ('$firstname', '$lastname', '$quantity', '$value', '$product', '$details')";

    if ($conn->query($sql) === TRUE) {
      echo "Novo registro criado.";
    } else {
      echo "Errado: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }

//Criar formulario com os campos compras (inserção)
//botao enviar com post
//fazer um if para enviar e coonfimar, caso seja preenchido (Insert into)
//
?>

    <form action="create.php" method="post">
        <p>First Name: <input type="text" name="firstname" placeholder="First Name"></p>
        <p>Last Name: <input type="text" name="lastname" placeholder="Last Name"></p>
        <p>Quatity: <input type="number" name="quantity" placeholder="Quatity"></p>
        <p>Value: <input type="number" name="value" placeholder="Value"></p>
        <p>Product: <input type="text" name="product" placeholder="Product"></p>
        <p>Details: <input type="text" name="details" placeholder="Details"></p>
        <p><input type="submit" /></p>
    </form>

    <a href="index.php">Voltar para listagem</a>

    

 




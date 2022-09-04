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

$sql = "SELECT * FROM movimentacoes WHERE id=" . $id;
$result = $conn->query($sql);
$dados = $result->fetch_assoc();
// var_dump($dados);

$conn->close();
?>

  <form action="update.php" method="post">
      <input  type="hidden" name="id" value="<?= $dados["id"]?>">

      <div>
        <label>Data de Pagamento:</label><br>
        <input type="text" name="datapagamento" placeholder="Data de Pagamento" value="<?= $dados["datapagamento"]?>">
      </div>

      <div>
        <label>Tipo:</label><br>
        <select type="text" name="tipo" value="<?= $dados["tipo"]?>"></p>
            <option value="">Escolha</option>
            <option value="Receita">Receita</option>
            <option value="Despesa">Despesa</option>
        </select>
      </div>

      <div>
        <label>Valor:</label><br>
        <input type="number" name="valor" placeholder="Valor" value="<?= $dados["valor"]?>"></p>
      </div>

      <div>
        <label>Forma de Pagamento:</label><br>
        <select type="text" name="formapagamento" value="<?= $dados["formapagamento"]?>"></p>
          <option value="">Escolha</option> 
          <option value="Dinheiro">Dinheiro</option>
          <option value="Cartão de Crédito">Cartão de Crédito</option>
          <option value="Cartão de Débito">Cartão de Débito</option>
          <option value="Boleto">Boleto</option>
          <option value="Pix">PIX</option>
        </select>
      </div>

      <div>
        <label>Categoria:</label><br>
        <input type="text" name="categoria" placeholder="Categoria" value="<?= $dados["categoria"]?>"></label>
      </div>

      <div>
        <input type="submit" />
      </div>
  </form>
  
  <a href="index.php">Voltar para listagem</a>
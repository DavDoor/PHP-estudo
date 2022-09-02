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
        <p>Data de Pagamento: <input type="text" name="datapagamento" placeholder="Data de Pagamento" value="<?= $dados["datapagamento"]?>"></p>
        <p>Tipo: <select type="text" name="tipo" value="<?= $dados["tipo"]?>"></p>
            <option value="">Escolha</option>
            <option value="">Receita</option>
            <option value="">Despesa</option>
        </select>
        <p>Valor: <input type="number" name="valor" placeholder="Valor" value="<?= $dados["valor"]?>"></p>
        <p>Forma de Pagamento: <select type="text" name="formapagamento" value="<?= $dados["formapagamento"]?>"></p>
                <option value="">Escolha</option> 
                <option value="adicao">Dinheiro</option>
                <option value="adicao">Cartão de Crédito</option>
                <option value="adicao">Cartão de Débito</option>
                <option value="adicao">Boleto</option>
                <option value="adicao">PIX</option>
                </select><br>
        <p>Categoria: <input type="text" name="categoria" placeholder="Categoria" value="<?= $dados["categoria"]?>"></p>
        <p><input type="submit" /></p>
    </form>
  
  <a href="index.php">Voltar para listagem</a>
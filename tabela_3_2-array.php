<?php
    $compra = array (
        array("Nome"=>"David", "Produto"=>"Bermuda", "Valor"=>60 ),
        array("Nome"=>"Michelly", "Produto"=>"Secador", "Valor"=>100),
        array("Nome"=>"Rafael", "Produto"=>"Camisa", "Valor"=>50),
        array("Nome"=>"Camila", "Produto"=>"Vestido","Valor"=>80)
    );
    //print_r($compra);

    echo $compra[0]["Nome"];
    echo $compra[0]["Produto"];
    echo $compra[0]["Valor"];
    echo "<br>";
    echo $compra[1]["Nome"];
    echo $compra[1]["Produto"];
    echo $compra[1]["Valor"];
    echo "<br>";
    echo $compra[2]["Nome"];
    echo $compra[2]["Produto"];
    echo $compra[2]["Valor"];
    echo "<br>";
    echo $compra[3]["Nome"];
    echo $compra[3]["Produto"];
    echo $compra[3]["Valor"];

    echo "<br>";
?>

 <style>
        table, tr, td, th {
            border: 0.1px solid black
        }
        table tr:nth-child(even) { 
            background-color: red;
        } 
        table tr:nth-child(odd) {
            background-color: blue;
        }
</style>


<table style="width:30%">
    <tr>
        <th>Nome</th>
        <th>Produto</th>
        <th>Valor</th>
    </tr>

    <?php foreach($compra as $c) : ?>

        <tr>
            <td><?= $c["Nome"] ?></td> 
            <td><?= $c["Produto"] ?></td>
            <td> R$ <?= $c["Valor"] ?></td>
        </tr>

    <?php endforeach ?>
</table>




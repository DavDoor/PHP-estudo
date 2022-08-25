<?php
    $compra = array (
        array("David", "Bermuda", 60 ),
        array("Michelly", "Secador", 100),
        array("Rafael", "Camisa", 50),
        array("Camila", "Vestido", 80),
        array("Maria", "Caneta", 100) 
    );  
        //quando acrescenta mais "array", se acrescenta mais linhas na tabela
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
        <th>Clientes</th>
        <th>Produto</th>
        <th>Valor</th>
    </tr>
    <?php foreach($compra as $c) : ?>

    <tr>
        <td><?= $c[0] ?></td> 
        <td><?= $c[1] ?></td>
        <td> R$ <?= $c[2] ?></td>
    </tr>

    <?php endforeach ?>
</table>


    



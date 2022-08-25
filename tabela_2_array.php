<?php
    $compra = array (
        array("David", "Bermuda", 60 ),
        array("Michelly", "Secador", 100),
        array("Rafael", "Camisa", 50),
        array("Camila", "Vestido", 80)
    );
    //print_r($compra);

    echo $compra[0][0];
    echo $compra[0][1];
    echo $compra[0][2];
    echo "<br>";
    echo $compra[1][0];
    echo $compra[1][1];
    echo $compra[1][2];
    echo "<br>";
    echo $compra[2][0];
    echo $compra[2][1];
    echo $compra[2][2];
    echo "<br>";
    echo $compra[3][0];
    echo $compra[3][1];
    echo $compra[3][2];

    echo "<br><br>";
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

<table style="width:50%">
    <tr>
        <th>Clientes</th>
        <th>Produto</th>
        <th>Valor</th>
    </tr>
    <tr>
        <td><?php echo $compra[0][0]; ?></td> 
        <td><?= $compra[0][1] ?></td>
        <td>R$ <?= $compra[0][2] ?></td>
    </tr>
        <td> <?= $compra[1][0] ?></td>
        <td> <?= $compra[1][1] ?></td>
        <td>R$ <?= $compra[1][2] ?></td>
    </tr>
    <tr>
        <td><?= $compra[2][0] ?></td>
        <td><?= $compra[2][1] ?></td>
        <td>R$ <?= $compra[2][2] ?></td>
    </tr>
    <tr>
        <td><?= $compra[3][0] ?></td>
        <td><?= $compra[3][1] ?></td>
        <td>R$ <?= $compra[3][2] ?></td>
    </tr>
</table>


    



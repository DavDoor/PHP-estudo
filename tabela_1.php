<!--
    //criar uma tabela com clientes, compras, etc... 
    utilizar a tabela que você criou nas pegando os dados de um array dinamicamente
    No caso, você deve ter um array de clientes, e o body da tabela deve conter os dados de um array "multidimensional" de clientes
    Agora você já manja de array, for e a tag table da pra gente brincar com isso
-->
<style>
    table, tr, td, th {
        border: 0.1px solid black
    }
    table tr:nth-child(even) {  /* TABELA COLORIDA */
        background-color: red; /* par vermelho */
    } 
    
    table tr:nth-child(odd) {  /* TABELA COLORIDA */
        background-color: blue; /* ímpar azul */
    }

</style>

<table style="width:50%">
    <tr>
        <th>Clientes</th>
        <th>Produto</th>
        <th>Valor</th>
    </tr>
    <tr>
        <td>David</td>
        <td>Bermuda</td>
        <td>R$ 60,00</td>
    <tr>
        <td>Michelly</td>
        <td>Secador</td>
        <td>R$ 100,00</td>
    </tr>
    <tr>
        <td>Rafael</td>
        <td>Camisa</td>
        <td>R$ 50,00</td>
    </tr>
    <tr>
        <td>Camila</td>
        <td>Vestido</td>
        <td>R$ 80,00</td>
    </tr>
</table>



<?php
require_once "conexao.php";
$id_h = $_GET['id_hotel'];
$sql = "SELECT reservas.id, quartos.numero, quartos.tipo, quartos.preco_diaria, clientes.telefone, reservas.data_entrada, reservas.data_saida, clientes.nome FROM reservas join quartos on reservas.quarto_id = quartos.id join clientes on clientes.id = reservas.cliente_id  where quartos.hotel_id = 1";

$resultado = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>numero</td>
                <td>tipo</td>
                <td>preco</td>
            </tr>
        </thead>
        <?php
        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>", $linha['id'], "</td>";
            echo "<td>", $linha['numero'], "</td>";
            echo "<td>", $linha['nome'], "</td>";
            echo "<td>", $linha['tipo'], "</td>";
            echo "<td>", $linha['preco_diaria'], "</td>";
            echo "</tr>";
        }
        ?> 
    </table>
    <a href="cadastrar_quarto.html">cadastro de quarto</a><br>
    <a href="logout_hotel.php">sair</a>
</body>
</html>
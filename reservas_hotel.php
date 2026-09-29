<?php
require_once "conexao.php";
$id_h = $_GET['id_hotel'];
$sql = "SELECT reservas.id, quartos.numero, quartos.tipo, quartos.preco_diaria, reservas.data_entrada, reservas.data_saida, hoteis.nome FROM reservas join quartos on reservas.quarto_id = quartos.id join hoteis on hoteis.id = quartos.hotel_id where quartos.hotel_id = '$id_h'";

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
                <td>

                </td>
            </tr>
        </thead>
        <?php
        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>", $linha['numero'], "</td>";
            echo "<td>", $linha['tipo'], "</td>";
            echo "<td>", $linha['preco_diaria'], "</td>";
            echo "</tr>";
        }
        ?> 
    </table>
</body>
</html>
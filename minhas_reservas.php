<?php
require_once "conexao.php";
$id_c = $_GET['id_cliente'];
$sql = "SELECT reservas.id, quartos.numero, quartos.tipo, quartos.preco_diearia, reservas.data_entrada, reservas.data_saida FROM reservas join quartos on reservas.id_quarto = quartos.id where reservas.id_cliente = '$id_c'";

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
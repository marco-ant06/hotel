<?php
require_once "conexao.php";
$hotel_id = $_GET['id_hotel'];

$sql = "SELECT * FROM quartos WHERE hotel_id = '$hotel_id' AND disponivel = 1";
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
                <td>Numero</td>
                <td>Tipo de quarto</td>
                <td>Preço</td>
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
        <div>
            <form action="salvar_reserva.php" method="post">
                <label for="">ID doo cliente:</label><input type="number" id="id_cliente" name="id_cliente">
                <label for="">ID do quarto:</label><input type="number" id="id_quarto" name="id_quarto">
                <label for="">Data de entrada:</label><input type="date" id="data_e" name="data_e">
                <label for="">Data de saida:</label><input type="date" id="data_s" name="data_s">
                <button>Confirmar reserva</button>
            </form>
        </div>
</body>
</html>
<?php
require_once "conexao.php";
$sql = "SELECT * FROM quartos";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style\style.css">
</head>
<body>
    <h1 style="color: blue;">Hotel System</h1><br>
    <div  class="formul">
    <table>
        <thead>
            <tr>
                <td>ID do hotel</td>
                <td>Numero</td>
                <td>Tipo de quarto</td>
                <td>Preço</td>
                <td>Disponivel</td>
            </tr>
        </thead>
        <tbody>
                <?php
                if (mysqli_fetch_assoc($resultado) >= 0) {
                while($quarto = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td>", $quarto['hotel_id'], "</td>";
                    echo "<td>", $quarto['numero'], "</td>";
                    echo "<td>", $quarto['tipo'], "</td>";
                    echo "<td>", $quarto['preco_diaria'], "</td>";
                    echo "<td>", $quarto['disponivel'], "</td>";
                    echo "</tr>";
                }}
                ?>
        </tbody>
    </table>
    </div>
</body>
</html>
<?php
require_once "conexao.php";

$sql = "SELECT * FROM hoteis";

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
                <td>Link</td>
            </tr>
        </thead>
        <tbody>
                <?php
                if(mysqli_num_rows($resultado) > 0){
                while($hoteis = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td>", $hoteis['id'], "</td>";
                    echo "<td>", $hoteis['nome'], "</td>";
                    echo "<td>", $hoteis['cidade'], "</td>";
                    echo "<td>", $hoteis['estrelas'], "</td>";
                    echo "<td> <a href='ver_quartos.php?id_hotel=",$hoteis['id'],"'>Ver quartos</a></td>";
                    echo "</tr>";   
                }}
                ?>
        </tbody>
    </table>
    </div>
</body>
</html>
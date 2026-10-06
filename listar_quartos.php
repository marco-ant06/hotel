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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.html" class="navbar-brand fw-bold">Imperial Hoteis</a>
            <ul class="nav">
                <li class="nav-item"><a href="cadastro_hotel.html" class="nav-link text-white">Cadastro hoteis</a></li>
                <li class="nav-item"><a href="cadastro_cliente.html" class="nav-link text-white">Cadastro cliente</a></li>
            </ul>
        </div>
    </nav>
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
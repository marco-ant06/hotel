<?php
require_once "conexao.php";
$sql = "SELECT reservas.id, quartos.numero, quartos.tipo, quartos.preco_diaria, reservas.data_entrada, reservas.data_saida, hoteis.nome FROM reservas join quartos on reservas.quarto_id = quartos.id join hoteis on hoteis.id = quartos.hotel_id";

$resultado = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
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
    <table class="table table-striped">
        <thead>
            <tr>
                <td>numero</td>
                <td>tipo</td>
                <td>preço</td>
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
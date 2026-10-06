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
<?php 
require_once "conexao.php";
$id_c = $_POST['id_cliente'];
$id_q = $_POST["id_quarto"];
$data_e = $_POST['data_e'];
$data_s = $_POST['data_s'];

$sql = "INSERT INTO reservas (cliente_id, quarto_id, data_entrada, data_saida) values ('$id_c', '$id_q', '$data_e', '$data_s')";


if(mysqli_query($conexao,$sql)){
    echo "reserva confirmada <a href='minhas_reservas.php'>ver reservas</a>";
}else{
    echo "ERRO <a href='ver_quartos.php'>retorne para a tela de reserva</a>";
}
?>
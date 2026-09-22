<?php 
require_once "conexao.php";
$hotel = $_POST['id_hotel'];
$numero = $_POST['numero'];
$tipo = $_POST['tipo'];
$preco = $_POST['preco'];

$sql = "INSERT INTO quartos (hotel_id, numero, tipo, preco_diaria) values ('$hotel', '$numero', '$tipo', '$preco');";

if(mysqli_query($conexao,$sql)){
    echo "Cadastro completo!";
}else{

}
?>
<?php 
require_once "conexao.php";
$nome = $_POST['nome_h'];
$cidade = $_POST['cidade'];
$class = $_POST['class'];

$sql = "INSERT INTO hoteis (nome, cidade, estrelas) values ('$nome', '$cidade', '$class');";

if(mysqli_query($conexao,$sql)){

}else{

}
?>
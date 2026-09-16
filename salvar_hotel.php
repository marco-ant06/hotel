<?php 
require_once "conexao.php";
$nome = $_POST['nome_h'];
$cidade = $_POST['cidade'];
$class = $_POST['classe'];
$senha = $_POST['senha'];

$sql = "INSERT INTO hoteis (nome, cidade, estrelas, senha) values ('$nome', '$cidade', '$class', '$senha')";

if(mysqli_query($conexao,$sql)){
    echo "conectado com sucesso!";
}else{
    echo "ERRO";
}
?>
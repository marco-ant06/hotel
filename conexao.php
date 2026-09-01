<?php 
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "hoteldb";

$conexao = mysqli_connect($host,$usuario,$senha,$banco);

if($conexao){
    echo "conectado com sucesso";
}else {
    echo "conexão falha";
}
?>
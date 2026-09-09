<?php 
include "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM clientes where email = '$email' and senha = '$senha'";
$resultado = mysqli_query($conexao,$sql);

if(mysqli_num_rows($resultado) > 0){
    echo "login completo <a href='reservas.html'>reservas</a>";
}else{
    echo "email ou senha incorreto <a href='login.html'>Login</a>";
}
?>
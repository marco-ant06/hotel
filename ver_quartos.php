<?php
require_once "conexao.php";
$id_hotel = $_GET['id_hotel'];

$sql = "SELECT * FROM quartos WHERE hotel_id = '$id_hotel'";
?>
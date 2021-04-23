<?php 
session_start();
include_once ("conexao.php");

$id = filter_input(INPUT_GET, 'id3', FILTER_SANITIZE_NUMBER_INT);
$query = "update anuncios set situacao = 'Não Disponível' where id = '$id'";
$resultado = mysqli_query($conn, $query);

header('Location: index-dashboard');
exit();
?>
<?php 
session_start();
include_once ("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$query = "delete from anuncios where id = '$id'";
$result_q = mysqli_query($conn,$query);
if(mysqli_affected_rows($conn)){
    $_SESSION['msg7'] = "true";
    header('Location: index-dashboard');
    exit();
}

?>
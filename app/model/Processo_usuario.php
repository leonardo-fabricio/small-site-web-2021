<?php

include_once ("conexao.php");
//recebendo dados do formulario
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);

//inserindo dados no banco
$result_usuario = "insert into usuario (nome,celular,email,senha,cidade,cep) values ('$nome','$celular','$email','$senha','$cidade','$cep')";
$retorno = mysqli_query($conn, $result_usuario);

//verificando se a conexao foi feita
if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "true";
    header('Location: index-login');

    exit();
}
else{
    $_SESSION['msg'] = "false";
    header('Location: index-cadastro');

    exit();
}
?>
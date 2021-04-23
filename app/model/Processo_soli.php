<?php
    session_start();
    include_once ("conexao.php");

 
    $descrissao = filter_input(INPUT_POST, 'w3review', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);

    $idu = $_SESSION['idu'];
    $dados_anuncio = "insert into solicitacoes values (default,'$cidade','$descrissao','$idu')";
    $retorno_anuncio = mysqli_query($conn, $dados_anuncio);

    if(mysqli_insert_id($conn)){
        $_SESSION['msg5'] = "true"; 

        header('Location: index-dashboard');
        exit();
    }
        
    else{
        $_SESSION['msg5'] = "false";
        header('Location: index-solicitar');
        die();
    }
?>
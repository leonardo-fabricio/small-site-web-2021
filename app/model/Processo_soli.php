<?php
    include_once ("conexao.php");

 
    $descrissao = filter_input(INPUT_POST, 'w3review', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);

    $dados_anuncio = "insert into solicitacoes values (default,'$cidade','$descrissao')";
    $retorno_anuncio = mysqli_query($conn, $dados_anuncio);

    if(mysqli_insert_id($conn)){
        $ids = (int) mysqli_insert_id($conn);
        $idu = $_SESSION['idu'];
        $_SESSION['msg5'] = "true"; 
        $queryA = "insert into solicitar (idu , idsolicitacao) values ('$idu', '$ids')";
        $result_q = mysqli_query($conn,$queryA);

        header('Location: index-dashboard');
        exit();
    }
        
    else{
        $_SESSION['msg5'] = "false";
        header('Location: index-solicitar');
        die();
    }
?>
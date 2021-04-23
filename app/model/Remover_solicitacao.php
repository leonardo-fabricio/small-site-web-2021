<?php 
    session_start();
    include_once ("conexao.php");

    $id = filter_input(INPUT_GET, 'id2', FILTER_SANITIZE_NUMBER_INT); // Muda apenas o "design", se id = id2 usuario escolhe remover e muda a mensagem
    $id3 = filter_input(INPUT_GET, 'id3', FILTER_SANITIZE_NUMBER_INT);
    if($id != 0){
        $query = "delete from solicitacoes where id = '$id'";
        $result_q = mysqli_query($conn,$query);
        if(mysqli_affected_rows($conn)){
            $_SESSION['msg7'] = "true";
            header('Location: index-dashboard');
            exit();
        }
    }else{
        $query = "delete from solicitacoes where id = '$id3'";
        $result_q = mysqli_query($conn,$query);

        if(mysqli_affected_rows($conn)){
            $_SESSION['msg8'] = "true";
            header('Location: index-dashboard');
            exit();
        }
    }

?>
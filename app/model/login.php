<?php 
    session_start();
   include_once ('conexao.php');

    if(empty($_POST['email']) || empty($_POST['senha'])){ //se querer entrar digitando no navegador
        header('Location: index-login');
        exit();
    }
    $emaillogin = mysqli_real_escape_string($conn, $_POST['email']);
    $senhalogin = mysqli_real_escape_string($conn, $_POST['senha']);

    $query = "SELECT * FROM `usuario` WHERE email = '$emaillogin' AND senha = '$senhalogin' ";
    $result = mysqli_query($conn, $query);

    $row = mysqli_num_rows($result);


    if($row == 1) {
        $_SESSION['msg3'] = "True";
        $_SESSION['email'] = $emaillogin;
        header('Location: index-dashboard');
        exit();
    }else{
        $_SESSION['msg3'] = "false";
        header('Location: index-login');
        exit();
    }

?>
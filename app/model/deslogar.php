<?php 
session_start();
unset($_SESSION['idu']);
unset($_SESSION['email']);
unset($_SESSION['celular']);
unset($_SESSION['nome']);
unset($_SESSION['cidade']);
unset($_SESSION['caminho']);
unset($_SESSION['msg5']);
unset($_SESSION['msg2']);
header('Location: index');
exit(); 
     
?>

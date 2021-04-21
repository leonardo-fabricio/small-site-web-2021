<?php 
session_start();
unset($_SESSION['idu']);
unset($_SESSION['email']);
unset($_SESSION['celular']);
unset($_SESSION['nome']);
unset($_SESSION['cidade']);
unset($_SESSION['caminho']);
header('Location: index');
exit(); 
     
?>

<?php 
session_start();
unset($_SESSION['idu']);
unset($_SESSION['email']);
unset($_SESSION['celular']);
unset($_SESSION['nome']);
header('Location: index');
exit(); 
     
?>
